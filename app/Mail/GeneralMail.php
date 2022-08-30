<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GeneralMail extends Mailable
{
    use Queueable, SerializesModels;

    public $objContact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($objContact)
    {
        $this->objContact = $objContact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('rezi.sirbiladze2@gmail.com','Athena-s')
        ->replyTo($this->objContact->from_email)
        ->subject($this->objContact->subject)
        ->view($this->objContact->view);
    }
}
