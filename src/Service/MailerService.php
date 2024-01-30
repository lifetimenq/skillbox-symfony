<?php

namespace App\Service;

use App\Entity\User;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

class MailerService
{
    /**
     * @param EmailVerifier $emailVerifier
     * @param User $user
     * @return void
     */
    public function sendEmailConfirmation(EmailVerifier $emailVerifier, User $user): void
    {
        /** @var EmailVerifier|null $emailVerifier */
        $emailVerifier->sendEmailConfirmation('app_verify_email', $user,
            (new TemplatedEmail())
                ->from(new Address($_ENV['EMAIL_NO_REPLY'], $_ENV['EMAIL_FROM']))
                ->to($user->getEmail())
                ->subject('Подтвердите свой Email')
                ->htmlTemplate('email/confirmation_email.html.twig')
        );

    }
}
