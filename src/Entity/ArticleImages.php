<?php

namespace App\Entity;

use App\Repository\ArticleImagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleImagesRepository::class)]
#[ORM\Table(name: 'article_images')]
class ArticleImages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private int $id;

    #[ORM\Column(name: 'image_link', type: 'string', length: 255)]
    private string $imageLink;

    #[ORM\ManyToOne(targetEntity: GeneratedArticles::class, inversedBy: 'articleImages')]
    #[ORM\JoinColumn(nullable: false)]
    private ?GeneratedArticles $article;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getImageLink(): ?string
    {
        return $this->imageLink;
    }

    /**
     * @param string $imageLink
     * @return $this
     */
    public function setImageLink(string $imageLink): self
    {
        $this->imageLink = $imageLink;

        return $this;
    }

    /**
     * @return GeneratedArticles|null
     */
    public function getArticle(): ?GeneratedArticles
    {
        return $this->article;
    }

    /**
     * @param GeneratedArticles|null $article
     * @return $this
     */
    public function setArticle(?GeneratedArticles $article): self
    {
        $this->article = $article;

        return $this;
    }
}
