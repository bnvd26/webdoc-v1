<?php

namespace App\Repository;

use App\Entity\Questions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Questions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Questions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Questions[]    findAll()
 * @method Questions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Questions::class);
    }

    // /**
    //  * @return Questions[] Returns an array of Questions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Questions
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function transform(Questions $questions)
    {
        return [
                'id'         => (int) $questions->getId(),
                'question'   => (string) $questions->getQuestion(),
                'reponseA'   => (string) $questions->getReponseA(),
                'reponseB'   => (string) $questions->getReponseB(),
                'reponseC'   => (string) $questions->getReponseC(),
                'link'       => (string) $questions->getLink(),
                'linkSumm'   => (string) $questions->getLinkSumm(),
                'extrait'    => (string) $questions->getExtrait()
                
                
        ];
    }

    public function transformAll()
    {
        $questions = $this->findAll();
        $questionsArray = [];

        foreach ($questions as $content) {
            $questionsArray[] = $this->transform($content);
        }

        return $questionsArray;
    }
}
