<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'user')]
#[UniqueEntity(fields: ['email'], message: 'Аккаунт с таким Email уже зарегистрирован')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private int $id;

    #[ORM\Column(name: 'email', type: 'string', length: 255, unique: true)]
    private string $email;

    #[ORM\Column(name: 'roles', nullable: false)]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column(name: 'password', type: 'string')]
    private string $password;

    #[ORM\Column(name: 'first_name', type: 'string', length: 255, nullable: true)]
    private ?string $firstName = null;

    #[ORM\Column(name: 'is_verified', type: 'boolean', nullable: true)]
    private $isVerified = false;

    #[ORM\Column(name: 'subscription_expires_at', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $subscriptionExpiresAt = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: ApiToken::class, orphanRemoval: true)]
    private Collection $apiTokens;

    #[ORM\Column(name: 'new_email', type: 'string', length: 255, nullable: true)]
    private ?string $newEmail = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Module::class, orphanRemoval: true)]
    private Collection $modules;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: GeneratedArticles::class, orphanRemoval: true)]
    private Collection $generatedArticles;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->apiTokens = new ArrayCollection();
        $this->modules = new ArrayCollection();
        $this->generatedArticles = new ArrayCollection();
    }

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
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return bool
     */
    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    /**
     * @param bool $isVerified
     * @return $this
     */
    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getSubscriptionExpiresAt(): ?\DateTimeInterface
    {
        return $this->subscriptionExpiresAt;
    }

    /**
     * @param \DateTimeInterface|null $subscriptionExpiresAt
     * @return $this
     */
    public function setSubscriptionExpiresAt(?\DateTimeInterface $subscriptionExpiresAt): self
    {
        $this->subscriptionExpiresAt = $subscriptionExpiresAt;

        return $this;
    }

    /**
     * @return Collection<int, ApiToken>
     */
    public function getApiTokens(): Collection
    {
        return $this->apiTokens;
    }

    /**
     * @param ApiToken $apiToken
     * @return $this
     */
    public function addApiToken(ApiToken $apiToken): self
    {
        if (!$this->apiTokens->contains($apiToken)) {
            $this->apiTokens->add($apiToken);
            $apiToken->setUser($this);
        }

        return $this;
    }

    /**
     * @param ApiToken $apiToken
     * @return $this
     */
    public function removeApiToken(ApiToken $apiToken): self
    {
        if ($this->apiTokens->removeElement($apiToken)) {
            // set the owning side to null (unless already changed)
            if ($apiToken->getUser() === $this) {
                $apiToken->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewEmail(): ?string
    {
        return $this->newEmail;
    }

    /**
     * @param string|null $newEmail
     * @return $this
     */
    public function setNewEmail(?string $newEmail): self
    {
        $this->newEmail = $newEmail;

        return $this;
    }

    /**
     * @return Collection<int, Module>
     */
    public function getModules(): Collection
    {
        return $this->modules;
    }

    /**
     * @param Module $module
     * @return $this
     */
    public function addModule(Module $module): self
    {
        if (!$this->modules->contains($module)) {
            $this->modules->add($module);
            $module->setUser($this);
        }

        return $this;
    }

    /**
     * @param Module $module
     * @return $this
     */
    public function removeModule(Module $module): self
    {
        if ($this->modules->removeElement($module)) {
            // set the owning side to null (unless already changed)
            if ($module->getUser() === $this) {
                $module->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, GeneratedArticles>
     */
    public function getGeneratedArticles(): Collection
    {
        return $this->generatedArticles;
    }

    /**
     * @param GeneratedArticles $generatedArticle
     * @return $this
     */
    public function addGeneratedArticle(GeneratedArticles $generatedArticle): self
    {
        if (!$this->generatedArticles->contains($generatedArticle)) {
            $this->generatedArticles->add($generatedArticle);
            $generatedArticle->setUser($this);
        }

        return $this;
    }

    /**
     * @param GeneratedArticles $generatedArticle
     * @return $this
     */
    public function removeGeneratedArticle(GeneratedArticles $generatedArticle): self
    {
        if ($this->generatedArticles->removeElement($generatedArticle)) {
            // set the owning side to null (unless already changed)
            if ($generatedArticle->getUser() === $this) {
                $generatedArticle->setUser(null);
            }
        }

        return $this;
    }
}
