<?php

namespace App\Repository;

use App\Entity\Module;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Module>
 *
 * @method Module|null find($id, $lockMode = null, $lockVersion = null)
 * @method Module|null findOneBy(array $criteria, array $orderBy = null)
 * @method Module[]    findAll()
 * @method Module[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModuleRepository extends ServiceEntityRepository
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * ModuleRepository constructor.
     * @param ManagerRegistry $registry
     * @param EntityManagerInterface $em
     */
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, Module::class);
        $this->em = $em;
    }

    /**
     * @param int $moduleId
     */
    public function deleteTemplate(int $moduleId): void
    {
        $template = $this->find($moduleId);
        $this->em->remove($template);
        $this->em->flush();
    }

    /**
     * @param int $userId
     * @return array
     */
    public function getUserTemplates(int $userId): array
    {
        $qb = $this->em->createQueryBuilder();
        return $qb
            ->select('m.id', 'm.code')
            ->from(Module::class, 'm')
            ->where('m.user = :id')
            ->setParameter('id', $userId)
            ->getQuery()
            ->getResult()
            ;
    }
}
