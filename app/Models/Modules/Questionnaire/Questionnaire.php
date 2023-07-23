<?php

namespace App\Models\Modules\Questionnaire;

use App\Models\Modules\Question\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'expiry_date', 'type'];

    protected $casts = ['expiry_date' => 'date'];

    function questions()
    {
        return $this->belongsToMany(Question::class, 'questionnaire_questions');
    }
}
