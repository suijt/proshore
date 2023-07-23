<?php

namespace App\Models\Modules\Question;

use App\Models\Modules\Answer\Answer;
use App\Models\Modules\Questionnaire\Questionnaire;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    function questionnaire()
    {
        return $this->belongsToMany(Questionnaire::class, 'questionnaire_questions');
    }

    function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
