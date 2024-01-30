<?php

namespace App\Security;

use App\Repository\ApiTokenRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;

class EmailVerifier extends AbstractController
{
    /**
     * @var VerifyEmailHelperInterface
     */
    private VerifyEmailHelperInterface $verifyEmailHelper;
    /**
     * @var MailerInterface
     */
    private MailerInterface $mailer;
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;
    /**
     * @var ApiTokenRepository
     */
    private ApiTokenRepository $apiTokenRepository;

    /**
     * EmailVerifier constructor.
     * @param VerifyEmailHelperInterface $verifyEmailHelper
     * @param MailerInterface $mailer
     * @param EntityManagerInterface $entityManager
     * @param ApiTokenRepository $apiTokenRepository
     */
    public function __construct(
        VerifyEmailHelperInterface $verifyEmailHelper,
        MailerInterface $mailer,
        EntityManagerInterface $entityManager,
        ApiTokenRepository $apiTokenRepository
    ) {
        $this->verifyEmailHelper = $verifyEmailHelper;
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
        $this->apiTokenRepository = $apiTokenRepository;
    }

    /**
     * @param string $verifyEmailRouteName
     * @param UserInterface $user
     * @param TemplatedEmail $email
     * @return RedirectResponse
     */
    public function sendEmailConfirmation(string $verifyEmailRouteName, UserInterface $user, TemplatedEmail $email): RedirectResponse
    {
        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            $verifyEmailRouteName,
            $user->getId(),
            $user->getEmail(),
            ['id' => $user->getId()]
        );

        $context = $email->getContext();
        $context['signedUrl'] = $signatureComponents->getSignedUrl();
        $context['expiresAtMessageKey'] = $signatureComponents->getExpirationMessageKey();
        $context['expiresAtMessageData'] = $signatureComponents->getExpirationMessageData();

        $email->context($context);

        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $exception) {
            $this->addFlash('error', $exception->getReason());

            return $this->redirectToRoute('app_register');
        }
    }

    /**
     * @param Request $request
     * @param UserInterface $user
     * @return void
     * @throws VerifyEmailExceptionInterface
     */
    public function handleEmailConfirmation(Request $request, UserInterface $user): void
    {
        $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getId(), $user->getEmail());

        $user->setIsVerified(true);

        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    /**
     * @param string $verifyEmailRouteName
     * @param UserInterface $user
     * @param TemplatedEmail $email
     * @param string $newEmail
     * @return RedirectResponse|void
     */
    public function changeUserEmail(string $verifyEmailRouteName, UserInterface $user, TemplatedEmail $email, string $newEmail)
    {
        $apiToken = $this->apiTokenRepository->findOneBy(['user' => $user->getId()])->getToken();

        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            $verifyEmailRouteName,
            $user->getId(),
            $user->getEmail(),
            ['apiToken' => $apiToken]
        );

        $context = $email->getContext();
        $context['signedUrl'] = $signatureComponents->getSignedUrl();
        $context['expiresAtMessageKey'] = $signatureComponents->getExpirationMessageKey();
        $context['expiresAtMessageData'] = $signatureComponents->getExpirationMessageData();
        $context['newEmail'] = $newEmail;

        $email->context($context);

        try {
            $this->mailer->send($email);
        } catch (TransportExceptionInterface $exception) {
            $this->addFlash('error', $exception->getReason());

            return $this->redirectToRoute('app_dashboard_profile');
        }
    }
}
