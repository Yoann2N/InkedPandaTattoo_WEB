<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $nomExpediteur,
        public string $emailExpediteur,
        public string $messageContact
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [$this->emailExpediteur],
            subject: 'Nouveau message de contact — ' . $this->nomExpediteur,
        );
    }

    public function content(): Content
    {
        return new Content(
            text: 'emails.contact',
        );
    }
}