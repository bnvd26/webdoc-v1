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
        // create 20 products! Bam!
            $questions = new Questions();
            $questions->setQuestion("À quel sentiment / état d'esprit cet extrait vous fait-il penser?");
            $questions->setReponseA('Tristesse');
            $questions->setReponseB('Joie');
            $questions->setReponseC('Énergie');
            $questions->setLink('/questions/1');
            $manager->persist($questions);

            $manager->flush();
    }
}