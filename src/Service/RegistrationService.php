<?php

namespace App\Service;

use App\Entity\ApiToken;
use App\Entity\User;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegistrationService extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;
    /**
     * @var UserPasswordHasherInterface
     */
    private UserPasswordHasherInterface $userPasswordHasher;
    /**
     * @var MailerService
     */
    private MailerService $mailerService;

    /**
     * RegistrationService constructor.
     * @param EntityManagerInterface $entityManager
     * @param UserPasswordHasherInterface $userPasswordHasher
     * @param MailerService $mailerService
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $userPasswordHasher,
        MailerService $mailerService
    ) {
        $this->entityManager = $entityManager;
        $this->userPasswordHasher = $userPasswordHasher;
        $this->mailerService = $mailerService;
    }

    /**
     * @param EmailVerifier $emailVerifier
     * @param User $user
     * @param ApiToken $apiToken
     * @param FormInterface $form
     * @return void
     */
    public function register(EmailVerifier $emailVerifier, User $user, ApiToken $apiToken, FormInterface $form): void
    {
        $this->addFlash('verify_email', 'Для окончания регистрации подтвердите свой Email');

        // encode the plain password
        $user->setPassword(
            $this->userPasswordHasher->hashPassword(
                $user,
                $form->get('password')->getData()
            )
        )
            ->setRoles(["ROLE_USER", "ROLE_FREE"]);

        $this->entityManager->persist($user);
        $this->entityManager->persist($apiToken);
        $this->entityManager->flush();

        // generate a signed url and email it to the user
        $this->mailerService->sendEmailConfirmation($emailVerifier, $user);
    }
}
