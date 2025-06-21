<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class LoginSuccessMail extends Mailable
{
    use SerializesModels;

    public User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this
            ->subject('Login Successful')
            ->view('emails.login_success')
            ->with(['name' => $this->user->name]);
    }
}
