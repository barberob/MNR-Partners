<?php

namespace App\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    #[Assert\NotBlank(message: 'Le prénom est obligatoire.')]
    public ?string $firstName = null;

    #[Assert\NotBlank(message: 'Le nom est obligatoire.')]
    public ?string $lastName = null;

    #[Assert\NotBlank(message: 'L\'adresse e-mail est obligatoire.')]
    #[Assert\Email(message: 'Veuillez saisir une adresse e-mail valide.')]
    public ?string $email = null;

    public ?string $phone = null;

    #[Assert\NotBlank(message: 'Le message ne peut pas être vide.')]
    #[Assert\Length(min: 10, minMessage: 'Le message doit contenir au moins {{ limit }} caractères.')]
    public ?string $message = null;

    public function getName(): string
    {
        return $this->firstName.' '.$this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
