<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind('App\Contracts\AuthInterface', 'App\Repositories\Auth\AuthRepository');
        $this->app->bind('App\Contracts\QuestionnaireInterface', 'App\Repositories\Questionnaire\QuestionnaireRepository');
    }
}
