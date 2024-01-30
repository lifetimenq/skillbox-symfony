<?php

namespace App\Repository;

use App\Entity\ArticleContent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArticleContent>
 *
 * @method ArticleContent|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleContent|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleContent[]    findAll()
 * @method ArticleContent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleContentRepository extends ServiceEntityRepository
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * ArticleContentRepository constructor.
     * @param ManagerRegistry $registry
     * @param EntityManagerInterface $em
     */
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, ArticleContent::class);
        $this->em = $em;
    }

    /**
     * @param int $limit
     * @return int|mixed|string
     */
    public function findContentForDemoGeneration(int $limit)
    {
        $qb = $this->em->createQueryBuilder();
        return $qb
            ->select('ac.body')
            ->from(ArticleContent::class, 'ac')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
            ;
    }

}