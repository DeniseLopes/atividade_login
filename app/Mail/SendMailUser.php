<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Login;

class SendMailUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $login;
    public function __construct(Login $login)
    {
        $this->login = $login;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('denise@kosloski.com')
                    ->view('email.index')
                    ->with([
                    'login'=>$this->login,
        ]);
    }
}
