<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoginNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $loginTime;

    public function __construct(User $user, $loginTime)
    {
        $this->user = $user;
        $this->loginTime = $loginTime;
    }

    public function build()
    {
        return $this->view('emails.login-notification')
            ->subject('New Login Notification');
    }
}