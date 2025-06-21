<?php

namespace App\Jobs;

use App\Models\User;
use App\Mail\LoginSuccessMail;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;    // ← and this
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendLoginSuccessEmail implements ShouldQueue
{
    use Dispatchable, Queueable, InteractsWithQueue, SerializesModels;

    protected User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        Mail::to($this->user->email)
            ->send(new LoginSuccessMail($this->user));
    }
}
