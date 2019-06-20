<?php

namespace App\Repository;

use App\Entity\ChapterTwo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ChapterTwo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChapterTwo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChapterTwo[]    findAll()
 * @method ChapterTwo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChapterTwoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ChapterTwo::class);
    }

    // /**
    //  * @return ChapterTwo[] Returns an array of ChapterTwo objects
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
    public function findOneBySomeField($value): ?ChapterTwo
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function transform(ChapterTwo $chapterTwo)
    {
        return [
                'id'      => (int) $chapterTwo->getId(),
                'title'   => (string) $chapterTwo->getTitle(),
                'content' => (string) $chapterTwo->getContent(),
                'image'   => (string) $chapterTwo->getImageBackground(),
                'music'   => (string) $chapterTwo->getMusic()
        ];
    }

    public function transformAll()
    {
        $chapterTwo = $this->findAll();
        $chapterTwoArray = [];

        foreach ($chapterTwo as $content) {
            $chapterTwoArray[] = $this->transform($content);
        }

        return $chapterTwoArray;
    }
}
