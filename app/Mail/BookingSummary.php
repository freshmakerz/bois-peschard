<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Booking;

class BookingSummary extends Mailable
{
    use Queueable, SerializesModels;
    
    public $book;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $book)
    {
        $this->book = $book;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        return $this->from('reservation@gites-boispeschard.com', 'Gites du Bois Peschard')
                ->subject('Nouvelle demande de réservation')
                ->view('emails.summary');
    }
}
