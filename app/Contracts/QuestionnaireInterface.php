<?php

namespace App\Contracts;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

interface QuestionnaireInterface
{

    /**
     * @return JsonResponse
     */
    public function getAll(): JsonResponse;

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function generate(Request $request): JsonResponse;

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function sendInvite(Request $request): JsonResponse;

    /**
     * @param $invitationHash
     * @return JsonResponse
     */
    public function getQuestion($invitationHash): JsonResponse;

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function submitQuestionnaire(Request $request): JsonResponse;
}
