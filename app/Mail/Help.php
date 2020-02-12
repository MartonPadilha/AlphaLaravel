<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class Help extends Mailable
{
    use Queueable, SerializesModels;

    public $inputName;
    public $inputEmail;
    public $inputSubject;
    public $inputMessage;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputName, $inputEmail, $inputSubject, $inputMessage)
    {
        $this->inputName = $inputName;
        $this->inputEmail = $inputEmail;
        $this->inputSubject = $inputSubject;
        $this->inputMessage = $inputMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.help')->subject($this->inputSubject. ' - ' . $this->inputName);
    }
}
