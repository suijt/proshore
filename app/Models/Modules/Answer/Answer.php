<?php

namespace App\Models\Modules\Answer;

use App\Models\Modules\Question\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

}
