<?php

namespace App\Entity;

use App\Repository\ArticleContentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleContentRepository::class)]
#[ORM\Table(name: 'article_content')]
class ArticleContent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private int $id;

    #[ORM\Column(name: 'body', type: 'text')]
    private string $body;

    #[ORM\Column(name: 'code', type: 'string', length: 255)]
    private string $code;

    #[ORM\Column(name: 'theme', type: 'string', length: 255)]
    private string $theme;

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
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return $this
     */
    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTheme(): ?string
    {
        return $this->theme;
    }

    /**
     * @param string $theme
     * @return $this
     */
    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }
}
