<?php

namespace Itobuztech\Contact\Http\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message, $email, $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $email, $name)
    {
        $this->message = $message;
        $this->email = $email;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['message' => $this->message, 'email' => $this->email, 'name' => $this->name]);
    }
}
