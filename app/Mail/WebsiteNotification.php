<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WebsiteNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;

    public $sbject;

    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender, $sbject, $message)
    {
        $this->sender = $sender;
        $this->sbject = $sbject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.site_notification');
    }
}
