<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;
    private string $login;
    private int $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $login, int $code)
    {
        $this->login = $login;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('email.mail', ['code' => $this->code]);
        return $this->markdown('mail', ['login' => $this->login, 'code' => $this->code]);
    }
}
