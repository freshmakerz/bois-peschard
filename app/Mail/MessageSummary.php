<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Message;

class MessageSummary extends Mailable
{
    use Queueable, SerializesModels;
    
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('message@gites-boispeschard.com')
                ->subject('Nouveau message')
                ->view('emails.message')
                ->with(['data' => $this->message]);
    }
}
