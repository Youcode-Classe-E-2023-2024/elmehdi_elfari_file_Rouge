<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public   $reservations;

    /**
     * Create a new message instance.
     */
    public function __construct($reservations)
    {
        $this->reservations = $reservations;
    }

    /**
     * Build the message.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ticket de Reservations',
        );
    }


    public function content(): Content
    {
        return new Content(
            view: 'Mail.ticketMail',
            with: [$this->reservations]
        );
    }
}

