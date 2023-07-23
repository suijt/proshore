<?php

namespace App\Repositories\Question;

use App\Contracts\AuthInterface;
use App\Contracts\QuestionnaireInterface;
use App\Http\Resources\Questionnaire\QuestionnaireResource;
use App\Models\Modules\Question\Question;
use App\Models\Modules\Questionnaire\Questionnaire;
use App\Traits\ApiTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class QuestionRepository
{
    public static function getRandomQuestions($subject, $count)
    {
        if ($subject == 'physics') {
            $type = 0;
        } elseif ($subject == 'chemistry') {
            $type = 1;
        } else {
            return false;
        }
        return Question::where('type', $type)
            ->inRandomOrder()
            ->limit($count)
            ->get();
    }


}
