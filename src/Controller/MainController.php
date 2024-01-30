<?php

namespace App\Controller;

use App\Repository\UnregisteredUsersRepository;
use App\Service\ArticleGeneratorService;
use App\Service\UnregisteredUsersService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        $path = '/try';
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            $path = '/dashboard/create_article';
        }

        return $this->render('homepage.html.twig', [
            'path' => $path,
        ]);
    }

    #[Route('/try', name: 'app_try')]
    public function try(Request $request, ArticleGeneratorService $articleGeneratorService, UnregisteredUsersService $unregisteredUsersService, UnregisteredUsersRepository $unregisteredUsersRepository): Response
    {
        $title = $request->request->get('title');
        if ($title != null) {
            $articleData['theme'] = $request->request->get('theme') ?? '';
            $articleData['title'] = $title;
            $articleData['sizeFrom'] = 2;
            $articleData['word1Count'] = 2;
            $articleData['word1'] = $request->request->get('word1') ?? '';

            if (!$this->isGranted('IS_AUTHENTICATED_FULLY') && $unregisteredUsersRepository->checkIP($request->getClientIp()) === true) {
                $articleObject = $articleGeneratorService->generateArticle(null, $articleData, [], false);
                $article = $articleObject->getArticle();

                $unregisteredUsersService->addIP($request->getClientIp());
            } elseif ($this->isGranted('IS_AUTHENTICATED_FULLY')) {
                $articleObject = $articleGeneratorService->generateArticle(null, $articleData, [], false);
                $article = $articleObject->getArticle();
            } else {
                $disabled = true;
            }
        }

        $title = $articleData['title'] ?? null;

        return $this->render('try.html.twig', [
            'title' => $title,
            'article' => $article ?? null,
            'disabled' => $disabled ?? false,
        ]);
    }
}
