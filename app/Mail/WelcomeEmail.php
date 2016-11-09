<?php

namespace App\Mail;

use Password;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /** @var \App\Models\User */
    public $user;

    /** @var string */
    public $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;

        $this->token = Password::getRepository()->create($user);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->user->email)
                    ->subject('Welcome to ' . config('app.name'))
                    ->view('emails.users.welcome');
    }
}
