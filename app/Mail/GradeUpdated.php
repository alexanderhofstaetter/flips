<?php

namespace App\Mail;

use App\Grade;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GradeUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $grade, $user, $lv;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Grade $grade)
    {
        $this->grade = $grade;
        $this->lv = $grade->lv;
        $this->user = $grade->user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.grades.updated')
                    ->subject("[Flips] Neue Note in \"" . $this->lv->name . "\" verfügbar");
    }
}
