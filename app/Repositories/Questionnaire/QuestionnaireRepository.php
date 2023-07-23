<?php

namespace App\Repositories\Questionnaire;

use App\Contracts\QuestionnaireInterface;
use App\Http\Resources\Questionnaire\QuestionnaireResource;
use App\Jobs\SendEmailJob;
use App\Jobs\SendInvitation;
use App\Models\Modules\Question\Question;
use App\Models\Modules\Questionnaire\Questionnaire;
use App\Models\Modules\Student\Student;
use App\Models\Modules\Student\StudentQuestionnaire;
use App\Repositories\Question\QuestionRepository;
use App\Traits\ApiTrait;
use Database\Seeders\StudentSeeder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class QuestionnaireRepository implements QuestionnaireInterface
{
    use ApiTrait;

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        $questionnaires = Questionnaire::where('expiry_date', '>', Carbon::today())->latest()->get();

        return $this->sendResponse(QuestionnaireResource::collection($questionnaires), 'Questionnaires retrieved successfully.');
    }


    public function generate(Request $request): JsonResponse
    {
        $data['title'] = $request->title;
        $data['expiry_date'] = date('Y-m-d', strtotime($request->expiry_date));
        $questionnaire = Questionnaire::create($data);

        $physicsQuestion = QuestionRepository::getRandomQuestions('physics', 5);
        $chemistryQuestion = QuestionRepository::getRandomQuestions('chemistry', 5);

        $questionnaire->questions()->attach($physicsQuestion);
        $questionnaire->questions()->attach($chemistryQuestion);

        return $this->sendResponse(new QuestionnaireResource($questionnaire), 'Questionnaire generated successfully', 201);
    }

    public function sendInvite(Request $request): JsonResponse
    {

        $questionnaireId = $request->questionnaireId;
        $questionnaire = Questionnaire::where('id', $questionnaireId)->where('expiry_date', '>', Carbon::today())->first();

        if ($questionnaire) {
            dispatch(new SendInvitation($questionnaire->id));
            return $this->sendResponse(new QuestionnaireResource($questionnaire), 'Questionnaire invitation send to all students');
        }

        return $this->sendError('Not Found', ['error' => 'No questionnaire found']);
    }

    public function getQuestion($invitationHash): JsonResponse
    {
        $decode = invitationHashDecode($invitationHash);

        if (!$decode) {
            return $this->sendError('Not Found', ['error' => 'Invalid Token']);
        }

        $decodedArr = json_decode(json_encode($decode), true);

        $student = Student::where('email', $decodedArr[0])->first();
        if ($student) {
            $questionnaire = Questionnaire::with('questions.answers')->find($decodedArr[1]);

            $questionnaire->makeHidden(['questions.id', 'questions.created_at']);
            foreach ($questionnaire->questions as $question) {
                $question->makeHidden(['pivot', 'type']);
                foreach ($question->answers as $answer) {
                    $answer->makeHidden(['question_id', 'is_correct']);
                }
            }
            $data = [
                'student_id' => $student->id,
                'student_name' => $student->name,
                'questionnaire_id' => $questionnaire->id,
                'questionnaire_title' => $questionnaire->title,
                'questionnaire_expiry_date' => $questionnaire->expiry_date,
                'questions' => $questionnaire->questions,
            ];
            return $this->sendResponse($data, 'Questions fetched');
        }
        return $this->sendError('Not Found', ['error' => 'Invalid Token']);
    }

    public function submitQuestionnaire(Request $request): JsonResponse
    {
        foreach ($request->answers as $answer) {
            $studentQuestionnaire = StudentQuestionnaire::create(['student_id' => $request->student_id, 'question_id' => $answer['question_id'], 'answer_id' => $answer['answer_id'], 'questionnaire_id' => $request->questionnaire_id]);
        }
        return $this->sendResponse($studentQuestionnaire, 'Questionnaire submitted');
    }
}
