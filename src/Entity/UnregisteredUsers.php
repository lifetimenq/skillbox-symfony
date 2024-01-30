<?php

namespace App\Entity;

use App\Repository\UnregisteredUsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UnregisteredUsersRepository::class)]
#[ORM\Table(name: 'unregistered_users')]
class UnregisteredUsers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id', type: 'integer')]
    private int $id;

    #[ORM\Column(name: 'ip', type: 'string', length: 255)]
    private string $IP;

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
    public function getIP(): ?string
    {
        return $this->IP;
    }

    /**
     * @param string $IP
     * @return $this
     */
    public function setIP(string $IP): self
    {
        $this->IP = $IP;

        return $this;
    }
}
