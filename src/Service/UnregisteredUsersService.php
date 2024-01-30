<?php

namespace App\Service;

use App\Entity\UnregisteredUsers;
use Doctrine\ORM\EntityManagerInterface;

class UnregisteredUsersService
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * UnregisteredUsersService constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param string $ip
     * @return void
     */
    public function addIP(string $ip): void
    {
        $newIp = new UnregisteredUsers();
        $newIp->setIP($ip);
        $this->em->persist($newIp);
        $this->em->flush();
    }
}
