<?php


namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
            $user = new User();
            $user->setUsername("Groupe04");
            $user->setEmail("groupe04@gmail.com");
            $user->setPassword('$2y$10$i.ZD72l5t8BDRNPYB6hvLukSSlWJYnc6q1j7CEJdOHsZswCoN9ARm');
            $user->setApiToken('azef');
            $user->setRoles(['ADMIN']);
           
            $manager->persist($user);
            $manager->flush();
    }
    
  }