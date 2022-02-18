<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public User $user;
    public String $url;
    public String $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$url,$message)
    {
        $this->user=$user;
        $this->url=$url;
        $this->message=$message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from("tunicov-support@tunicov.tn")
        ->markdown('emails.test');
    }
}
