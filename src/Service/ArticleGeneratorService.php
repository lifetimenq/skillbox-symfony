<?php

namespace App\Service;

use App\Entity\ArticleContent;
use App\Entity\ArticleImages;
use App\Entity\GeneratedArticles;
use App\Entity\Module;
use App\Repository\ApiTokenRepository;
use App\Repository\ArticleContentRepository;
use App\Repository\GeneratedArticlesRepository;
use App\Repository\ModuleRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ArticleGeneratorService
{
    /**
     * @var string
     */
    private string $targetDirectory;
    /**
     * @var ArticleContentRepository
     */
    private ArticleContentRepository $articleContentRepository;
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;
    /**
     * @var GeneratedArticlesRepository
     */
    private GeneratedArticlesRepository $generatedArticlesRepository;
    /**
     * @var ModuleService
     */
    private ModuleService $moduleService;
    /**
     * @var ModuleRepository
     */
    private ModuleRepository $moduleRepository;
    /**
     * @var FileUploader
     */
    private FileUploader $fileUploader;
    /**
     * @var SubscriptionService
     */
    private SubscriptionService $subscriptionService;
    /**
     * @var ValidatorInterface
     */
    private ValidatorInterface $validator;
    /**
     * @var ApiTokenRepository
     */
    private ApiTokenRepository $apiTokenRepository;

    /**
     * ArticleGeneratorService constructor.
     * @param string $targetDirectory
     * @param ArticleContentRepository $articleContentRepository
     * @param EntityManagerInterface $em
     * @param GeneratedArticlesRepository $generatedArticlesRepository
     * @param ModuleService $moduleService
     * @param ModuleRepository $moduleRepository
     * @param FileUploader $fileUploader
     * @param SubscriptionService $subscriptionService
     * @param ValidatorInterface $validator
     * @param ApiTokenRepository $apiTokenRepository
     */
    public function __construct(
        string $targetDirectory,
        ArticleContentRepository $articleContentRepository,
        EntityManagerInterface $em,
        GeneratedArticlesRepository $generatedArticlesRepository,
        ModuleService $moduleService,
        ModuleRepository $moduleRepository,
        FileUploader $fileUploader,
        SubscriptionService $subscriptionService,
        ValidatorInterface $validator,
        ApiTokenRepository $apiTokenRepository
    ) {
        $this->targetDirectory = $targetDirectory;
        $this->articleContentRepository = $articleContentRepository;
        $this->em = $em;
        $this->generatedArticlesRepository = $generatedArticlesRepository;
        $this->moduleService = $moduleService;
        $this->moduleRepository = $moduleRepository;
        $this->fileUploader = $fileUploader;
        $this->subscriptionService = $subscriptionService;
        $this->validator = $validator;
        $this->apiTokenRepository = $apiTokenRepository;
    }

    /**
     * @param UserInterface|null $user
     * @param array $articleData
     * @param array|null $imageFileName
     * @param bool $insert
     * @return GeneratedArticles
     */
    public function generateArticle(UserInterface|null $user, array $articleData, array|null $imageFileName, bool $insert): GeneratedArticles
    {
        $articleData['sizeFrom'] = $articleData['sizeFrom'] ?? 1;
        $articleData['sizeTo'] = $articleData['sizeTo'] ?? null;
        $articleData['word2'] = $articleData['word2'] ?? null;
        $article = implode(PHP_EOL . PHP_EOL, $this->templateSelect($user, $articleData['sizeFrom'], $articleData['sizeTo'], $imageFileName));

        $keywords = [
            $articleData['keyword0'] ?? null,
            $articleData['keyword1'] ?? null,
            $articleData['keyword2'] ?? null,
            $articleData['keyword3'] ?? null,
            $articleData['keyword4'] ?? null,
            $articleData['keyword5'] ?? null,
            $articleData['keyword6'] ?? null,
        ];

        $keywords = implode(',', $keywords);

        /** @var ArticleContent|null $allArticles */
        if ($articleData['theme'] != null) {
            $allArticles = $this->articleContentRepository->findBy(['code' => $articleData['theme']]);
        } else {
            $allArticles = $this->articleContentRepository->findContentForDemoGeneration('300');
        }
        shuffle($allArticles);

        foreach ($allArticles as $paragraph) {
            if (str_contains($article, '{{ paragraph }}') === false && str_contains($article, '{{ paragraphs }}') === false) {
                break;
            }

            if (is_array($paragraph)) {
                $paragraph = $paragraph['body'];
            } else {
                $paragraph = $paragraph->getBody();
            }

            if ($articleData['word1']) {
                $paragraph = $this->wordIntegrator($articleData['word1'], $articleData['word1Count'], $paragraph);
            }
            if ($articleData['word2']) {
                $paragraph = $this->wordIntegrator($articleData['word2'], $articleData['word2Count'], $paragraph);
            }

            $article = preg_replace('/{{ paragraph }}/', $paragraph, $article, 1);
            $article = preg_replace('/{{ paragraphs }}/', $paragraph, $article, 1);
            $article = preg_replace('/{{ title }}/', $articleData['title'], $article, 1);
        }

        if ($imageFileName) {
            shuffle($imageFileName);
            foreach ($imageFileName as $image) {
                if (str_contains($article, '{{ image }}') === false) {
                    break;
                }
                $article = preg_replace('/{{ image }}/', $image, $article, 1);
            }

            preg_match_all('/{{ image }}/', $article, $matches[]);

            if (str_contains($article, '{{ image }}') === true) {
                for ($i = count($matches); ; $i--) {
                    if ($i == 0) {
                        break;
                    }
                    $article = preg_replace('/{{ image }}/', $imageFileName[rand(0, count($imageFileName) -1)], $article);
                }
            }
        }

        if ($insert === true) {
            $this->addArticle($user, $articleData['title'], $article, $articleData, $imageFileName, $keywords);
        }

        $articleObject = new GeneratedArticles();
        return $articleObject
            ->setTitle($articleData['title'])
            ->setArticle($article)
            ->setKeywords($keywords)
            ;
    }

    /**
     * @param $word
     * @param $wordCount
     * @param $paragraph
     * @return string
     */
    public function wordIntegrator($word, $wordCount, $paragraph): string
    {
        $paragraph = explode(' ', $paragraph);
        $word = "<b>" . $word . "</b>";
        for ($i = 1; $i <= $wordCount; $i++) {
            array_splice($paragraph, rand(1, count($paragraph)-1), 0, $word);
        }

        return implode(' ', $paragraph);
    }

    /**
     * @param $user
     * @param string $title
     * @param string $article
     * @param array $articleData
     * @param array $imageFileName
     * @param string $keywords
     * @return void
     */
    public function addArticle($user, string $title, string $article, array $articleData, array $imageFileName, string $keywords): void
    {
        $templateArray = [];

        foreach ($articleData as $key => $value) {
            $templateArray[] = $key . '_' . $value;
        }

        $template = implode(',', $templateArray);

        $newArticle = new GeneratedArticles();
        $newArticle
            ->setUser($user)
            ->setArticle($article)
            ->setTitle($title)
            ->setTemplate($template)
            ->setCreatedAt(new DateTime())
            ->setKeywords(serialize($keywords))
        ;
        $this->em->persist($newArticle);
        $this->em->flush();

        $articleObject = $this->generatedArticlesRepository->findOneBy(['id' => $newArticle->getId()]);

        if ($imageFileName != null) {
            $this->addArticleImage($articleObject, $imageFileName);
        }
    }

    /**
     * @param FormInterface $form
     * @return array
     */
    public function generateImagesPaths(FormInterface $form): array
    {
        $imageFile = $form->get('images')->getData() ?? null;
        $imageLinks = $form->get('imageLink')->getData() ?? null;

        $imageFileName = [];
        if ($imageFile) {
            foreach ($imageFile as $image) {
                $imageFileName[] = $this->targetDirectory . $this->fileUploader->upload($image);
            }
        }

        if ($imageLinks) {
            $imageFileName = $this->prepareImageByLinks($imageLinks);
        }

        return $imageFileName;
    }

    /**
     * @param GeneratedArticles $articleObject
     * @param array $imageFileName
     * @return void
     */
    public function addArticleImage(GeneratedArticles $articleObject, array $imageFileName): void
    {
        /** @var ArticleImages|null $newArticleImage */
        /** @var GeneratedArticles|null $articleObject */

        $newArticleImage = new ArticleImages;
        $newArticleImage
            ->setArticle($articleObject);

        if (is_array($imageFileName)) {
            foreach ($imageFileName as $image) {
                $newArticleImage
                    ->setImageLink($image);
                $this->em->persist($newArticleImage);
            }
        }
        $this->em->flush();
    }

    /**
     * @param UserInterface|null $user
     * @param int $sizeFrom
     * @param int|null $sizeTo
     * @param array $imageFileName
     * @return array
     */
    public function templateSelect(UserInterface|null $user, int $sizeFrom, int|null $sizeTo, array $imageFileName): array
    {
        if ($sizeTo == null) {
            $sizeTo = $sizeFrom;
        }
        $template = [];
        /** @var Module|null $userModules */
        if ($user == null || $this->moduleRepository->getUserTemplates($user->getId()) == null) {
            $userModules = $this->moduleService->getDefaultTemplates($imageFileName);
            shuffle($userModules);

            for ($i = $sizeFrom; $i <= $sizeTo; $i++) {
                $module = $userModules[rand(0, count($userModules) -1)];
                $template[] = $module;
            }

        } elseif ($imageFileName == null) {
            $userModules = $this->moduleRepository->getUserTemplates($user->getId());
            shuffle($userModules);

            foreach ($userModules as $module) {
                if (preg_match('{{{ image }}}', $module['code'])) {
                    continue;
                } else {
                    for ($i = $sizeFrom; $i <= $sizeTo; $i++) {
                        $template[$module['id']] = $module['code'];
                    }
                }
            }

        } else {
            $userModules = $this->moduleRepository->getUserTemplates($user->getId());
            shuffle($userModules);

            for ($i = $sizeFrom; $i <= $sizeTo; $i++) {
                $module = $userModules[rand(0, count($userModules) -1)];
                $template[$module['id']] = $module['code'];
            }
        }

        return $template;
    }

    /**
     * @param string $imageLinks
     * @return array
     */
    public function prepareImageByLinks(string $imageLinks): array
    {
        $images = [];
        foreach (explode(',', $imageLinks) as $key => $image) {
            $image = trim($image);
            if ($this->checkMimeType($image)) {
                $images[$key] = trim($image);
            }
        }
        return $images;
    }

    /**
     * @param string $image
     * @return bool
     */
    public function checkMimeType(string $image): bool
    {
        $mimes = array(
            IMAGETYPE_GIF => "image/gif",
            IMAGETYPE_JPEG => "image/jpg",
            IMAGETYPE_PNG => "image/png",
            IMAGETYPE_WEBP => "image/webp");

        return ($image_type = exif_imagetype($image)) && (array_key_exists($image_type, $mimes));
    }

    /**
     * @param array $parameters
     * @param string $token
     * @return GeneratedArticles|string[]
     */
    public function validateApiRequest(array $parameters, string $token): array|GeneratedArticles
    {
        $user = $this->apiTokenRepository->findOneBy(['token' => $token])->getUser();
        $theme = $this->articleContentRepository->findOneBy(['code' => $parameters['theme']]);

        $errors = $this->validator->validate($parameters);

        $articleData = [];

        if (count($errors) > 0) {
            $errorsString = (string) $errors;
            return [
                'error' => $errorsString,
            ];
        } elseif ($theme === null) {
            return [
                'error' => 'Такой тематики не существует',
            ];
        } elseif ($this->subscriptionService->checkDisabled2Hours($user)) {
            return [
                'error' => 'Вы уже сгенерировали 2 статьи за последние 2 часа. Оформите подписку PRO, чтобы снять ограничения',
            ];
        } elseif ($parameters['theme'] == null || $parameters['title'] == null) {
            return [
                'error' => 'Отсутствуют обязательные параметры: theme, title',
            ];
        } elseif ($this->subscriptionService->checkSubscription($user) !== 'FREE') {
            $articleData['theme'] = $parameters['theme'];
            $articleData['title'] = $parameters['title'];
            $articleData['keyword0'] = $parameters['keywords']['keyword0'];
            $articleData['sizeFrom'] = $parameters['sizeFrom'] ?? 1;
            $articleData['sizeTo'] = $parameters['sizeTo'] ?? null;
            $articleData['word1'] = $parameters['word1'] ?? null;
            $articleData['word1Count'] = $parameters['word1Count'] ?? null;
        }

        $articleData['keyword1'] = $parameters['keywords']['keyword1'];
        $articleData['keyword2'] = $parameters['keywords']['keyword2'];
        $articleData['keyword3'] = $parameters['keywords']['keyword3'];
        $articleData['keyword4'] = $parameters['keywords']['keyword4'];
        $articleData['keyword5'] = $parameters['keywords']['keyword5'];
        $articleData['keyword6'] = $parameters['keywords']['keyword6'];
        $articleData['word2'] = $parameters['word2'] ?? null;
        $articleData['word2Count'] = $parameters['word2Count'] ?? null;
        $images = $parameters['images'] ?? null;
        return $this->generateArticle($user, $articleData, $images, true);
    }

    /**
     * @param int $id
     * @return string
     */
    public function getArticleParams(int $id): string
    {
        $repeatParams = explode(',', implode(' ', $this->generatedArticlesRepository->getArticleTemplate($id)[0]));
        return str_replace('_', '=',implode('&', $repeatParams));
    }
}
