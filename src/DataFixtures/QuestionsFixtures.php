<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Questions;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $questions = new Questions();
            $questions->setExtrait("Extrait de ‘Mean Woman Blues’ de Jerry Lee Lewis");
            $questions->setQuestion("À quel sentiment / état d'esprit cet extrait vous fait-il penser?");
            $questions->setReponseA('Tristesse');
            $questions->setReponseB('Joie');
            $questions->setReponseC('Énergie');
            $questions->setLink('/questions/1');
            $questions->setLinkSumm('/summary');
            $manager->persist($questions);

            $questions = new Questions();
            $questions->setExtrait("Extrait de ‘Violin Sonata’ de Ravel");
            $questions->setQuestion("À quel sentiment / état d'esprit cet extrait vous fait-il penser?");
            $questions->setReponseA('Mal-être');
            $questions->setReponseB('Tristesse');
            $questions->setReponseC('Mélancolie');
            $questions->setLink('/questions/2');
            $questions->setLinkSumm('/summary');
            $manager->persist($questions);

            $questions = new Questions();
            $questions->setExtrait("Extrait de ‘Disco Blues’ de The Richie Family ");
            $questions->setQuestion("À quel sentiment / état d'esprit cet extrait vous fait-il penser?");
            $questions->setReponseA('Mélancolie');
            $questions->setReponseB('Joie');
            $questions->setReponseC('Énergie');
            $questions->setLink('/questions/2');
            $questions->setLinkSumm('/summary');
            $manager->persist($questions);

            $manager->flush();
    }
}