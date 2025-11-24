<?php

namespace App\Service;

use App\Model\Contact;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailService
{
    public function __construct(
        private readonly MailerInterface $mailer,
        #[Autowire('%env(EMAIL_FROM)%')] private readonly string $fromEmail,
        #[Autowire('%env(EMAIL_TO)%')] private readonly string $toEmail,
    ) {
    }

    public function sendContactEmail(Contact $contact): void
    {
        $email = (new Email())
            ->from($this->fromEmail)
            ->to($this->toEmail)
            ->subject('Nouveau message de contact')
            ->text(<<<TEXT
                Nouveau message de contact
                Nom: {$contact->getName()}
                Email: {$contact->getEmail()}
                Téléphone: {$contact->getPhone()}
                Message: {$contact->getMessage()}
            TEXT);

        $this->mailer->send($email);
    }
}
