<?php

namespace App\Jobs;

use App\Mail\InvitationEmail;
use App\Models\Modules\Student\Student;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendInvitation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $questionnaire;

    /**
     * Create a new job instance.
     */
    public function __construct($questionnaire)
    {
        $this->questionnaire = $questionnaire;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $students = Student::get()->map(function ($q) {
            return [
                'name' => $q->name,
                'email' => $q->email,
                'invitationHash' => invitationHash($q->email, $this->questionnaire),
            ];
        })->toArray();

        foreach ($students as $student) {
            $mailData['name'] = $student['name'];
            $mailData['invitationLink'] = config('app.url') . '/questionnaire/attend?token=' . $student['invitationHash'];
            $email = new InvitationEmail($mailData);
            Mail::to($student['email'])->send($email);
        }
    }
}
