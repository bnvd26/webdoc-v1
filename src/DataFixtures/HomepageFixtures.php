<?php

namespace App\DataFixtures;

use App\Entity\Homepage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class HomepageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      $homepage = new Homepage();
      $homepage->setTitle("CONTROL");
      $homepage->setGuide("Pour une meilleure expérience, montez le son ou mettez votre casque");
      $homepage->setQuestion('À quel point la musique influence-t-elle nos vies ?');
      $homepage->setSound('http://localhost:8000/test2.mp3');
      $manager->persist($homepage);

        $manager->flush();
    }

    
}
