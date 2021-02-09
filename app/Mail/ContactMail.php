<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    public $userMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content, $userMail)
    {
        $this->content = $content;
        $this->userMail = $userMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->userMail)->subject('New suggestion')->html($this->content);
    }
}
