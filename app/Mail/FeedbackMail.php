<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $status;
    private $correct_answers;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $status, $correct_answers)
    {
        $this->name = $name;
        $this->status = $status;
        $this->correct_answers = $correct_answers;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('results', [
            'name' => $this->name,
            'status' => $this->status,
            'correct_answers' => $this->correct_answers
        ]);

    }
}
