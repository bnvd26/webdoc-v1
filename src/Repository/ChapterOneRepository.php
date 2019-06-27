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
                'content' => (string) $chapterOne->getContent(),
                'image'   => (string) $chapterOne->getImageBackground(),
                'music'   => (string) $chapterOne->getMusic(),
                'filename'=> (string) $chapterOne->getFilename(),
                'content1'=> (string) $chapterOne->getContent1(),
                'content2'=> (string) $chapterOne->getContent2(),
                'content3'=> (string) $chapterOne->getContent3(),
                'content4'=> (string) $chapterOne->getContent4(),
                'content5'=> (string) $chapterOne->getContent5(),
                'content6'=> (string) $chapterOne->getContent6(),
                'content7'=> (string) $chapterOne->getContent7(),
                'content8'=> (string) $chapterOne->getContent8(),
                'content9'=> (string) $chapterOne->getContent9(),
                'content10'=> (string) $chapterOne->getContent10(),
                'content11'=> (string) $chapterOne->getContent11(),
                'content12'=> (string) $chapterOne->getContent12(),
                'content13'=> (string) $chapterOne->getContent13(),
                'content14'=> (string) $chapterOne->getContent14(),
                'content15'=> (string) $chapterOne->getContent15(),
                'content16'=> (string) $chapterOne->getContent16(),
                
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
