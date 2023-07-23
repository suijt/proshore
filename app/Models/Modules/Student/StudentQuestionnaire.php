<?php

namespace App\Models\Modules\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQuestionnaire extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'question_id', 'answer_id', 'questionnaire_id'];

}
