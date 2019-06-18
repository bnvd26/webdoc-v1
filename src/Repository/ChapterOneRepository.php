<?php

namespace App\Repository;

use App\Entity\ChapterOne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ChapterOne|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChapterOne|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChapterOne[]    findAll()
 * @method ChapterOne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChapterOneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ChapterOne::class);
    }

    // /**
    //  * @return ChapterOne[] Returns an array of ChapterOne objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ChapterOne
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function transform(ChapterOne $chapterOne)
    {
        return [
                'id'      => (int) $chapterOne->getId(),
                'title'   => (string) $chapterOne->getTitle(),
                'content' => (int) $chapterOne->getContent(),
                'image'   => (string) $chapterOne->getImageBackground(),
                'music'   => (string) $chapterOne->getMusic()
        ];
    }

    public function transformAll()
    {
        $chapterOne = $this->findAll();
        $chapterOneArray = [];

        foreach ($chapterOne as $content) {
            $chapterOneArray[] = $this->transform($content);
        }

        return $chapterOneArray;
    }
}
