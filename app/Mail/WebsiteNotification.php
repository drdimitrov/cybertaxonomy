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

    public $senderName;

    public $sbject;

    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender, $senderName, $subject, $content)
    {
        $this->sender = $sender;
        $this->senderName = $senderName;
        $this->subject = $subject;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->sender, $this->senderName)
            ->subject($this->subject)
            ->view('emails.site_notification')
            ->with([
                'sender' => $this->sender,
                'subject' => $this->subject,
                'content' => $this->content,
            ]);
    }
}
