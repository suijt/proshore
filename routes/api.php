<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Questionnaire\QuestionnaireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['sanitize'])->group(function ($router) {
    //--------------------------------------------------------------------------
    // Auth Routes
    //--------------------------------------------------------------------------
    $router->post('login', LoginController::class);


    //--------------------------------------------------------------------------
    // Student Questionnaire Routes
    //--------------------------------------------------------------------------
    $router->prefix('questionnaire')->controller(QuestionnaireController::class)->group(function ($router) {
        $router->get('getQuestion/{invitationHash}', 'getQuestion');
        $router->post('submit', 'submitQuestionnaire');
    });

    //--------------------------------------------------------------------------
    // Private Routes
    //--------------------------------------------------------------------------
    $router->middleware('auth:sanctum')->group(function ($router) {

        //--------------------------------------------------------------------------
        // Admin Questionnaire Routes
        //--------------------------------------------------------------------------
        $router->prefix('questionnaire')->controller(QuestionnaireController::class)->group(function ($router) {
            $router->get('', 'index');
            $router->post('generate', 'generate');
            $router->post('invite', 'invite');
        });
    });
});
