<?php

namespace App\Repository;

use App\Entity\UnregisteredUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UnregisteredUsers>
 *
 * @method UnregisteredUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnregisteredUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnregisteredUsers[]    findAll()
 * @method UnregisteredUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnregisteredUsersRepository extends ServiceEntityRepository
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * UnregisteredUsersRepository constructor.
     * @param ManagerRegistry $registry
     * @param EntityManagerInterface $em
     */
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, UnregisteredUsers::class);
        $this->em = $em;
    }

    /**
     * @param string $ip
     * @return bool
     */
    public function checkIP(string $ip): bool
    {
        $qb = $this->em->createQueryBuilder();
        $ips = $qb
            ->select('u.IP')
            ->from(UnregisteredUsers::class, 'u')
            ->where('u.IP LIKE :ip')
            ->setParameter('ip', $ip)
            ->getQuery()
            ->getResult()
        ;

        if (array_search($ip, array_column($ips, 'ip')) === false) {
            return true;
        } else {
            return false;
        }
    }
}