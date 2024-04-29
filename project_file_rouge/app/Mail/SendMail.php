<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $parcours;

    /**
     * Create a new message instance.
     */
    public function __construct(array $parcours)
    {
        $this->parcours = $parcours;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Voila Monsieur Le Ticket')
            ->view('Mail.ticketMail')
            ->with([
                'parcours' => $this->parcours,
            ]);
    }
}

