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

    public   $parcours;

    /**
     * Create a new message instance.
     */
    public function __construct($parcours)
    {
        $this->parcours = $parcours;
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
            with: [$this->parcours]
        );
    }
}

