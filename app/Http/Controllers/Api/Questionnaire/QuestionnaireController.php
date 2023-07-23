<?php

namespace App\Http\Controllers\Api\Questionnaire;

use App\Contracts\QuestionnaireInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Questionnaire\QuestionnaireRequest;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    /**
     * @var QuestionnaireInterface
     */
    private $questionnaire;

    /**
     * @param QuestionnaireInterface $questionnaire
     */
    public function __construct(QuestionnaireInterface $questionnaire)
    {
        $this->questionnaire = $questionnaire;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->questionnaire->getAll();
    }

    /**
     * @param QuestionnaireRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function generate(QuestionnaireRequest $request)
    {
        return $this->questionnaire->generate($request);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function invite(Request $request)
    {
        return $this->questionnaire->sendInvite($request);
    }

    /**
     * @param $invitationHash
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuestion($invitationHash)
    {
        return $this->questionnaire->getQuestion($invitationHash);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitQuestionnaire(Request $request)
    {
        return $this->questionnaire->submitQuestionnaire($request);
    }
}
