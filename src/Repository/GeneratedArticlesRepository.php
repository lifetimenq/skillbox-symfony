<?php

namespace App\Repository;

use App\Entity\GeneratedArticles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GeneratedArticles>
 *
 * @method GeneratedArticles|null find($id, $lockMode = null, $lockVersion = null)
 * @method GeneratedArticles|null findOneBy(array $criteria, array $orderBy = null)
 * @method GeneratedArticles[]    findAll()
 * @method GeneratedArticles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeneratedArticlesRepository extends ServiceEntityRepository
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $em;

    /**
     * GeneratedArticlesRepository constructor.
     * @param ManagerRegistry $registry
     * @param EntityManagerInterface $em
     */
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $em)
    {
        parent::__construct($registry, GeneratedArticles::class);
        $this->em = $em;
    }

    /**
     * @return array
     * @throws \Doctrine\ORM\Query\QueryException
     */
    public function getArticleThemes(): array
    {
        $qb = $this->em->createQueryBuilder();
        $themesArray = $qb
            ->select('ac.code', 'ac.theme')
            ->from('App:ArticleContent', 'ac')
            ->indexBy('ac', 'ac.code')
            ->getQuery()
            ->getResult()
        ;
        $themes = [];
        foreach ($themesArray as $key => $value) {
            $themes[$key] = $value['theme'];
        }

        return $themes;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getArticleTemplate(int $id): array
    {
        $qb = $this->em->createQueryBuilder();
        $query = $qb
            ->select('ga.template')
            ->from(GeneratedArticles::class, 'ga')
            ->andWhere('ga.id = :id')
            ->setParameter('id', $id)
            ->getQuery();
        return $query->execute();
    }
}
