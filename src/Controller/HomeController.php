<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController  extends Controller
{
         /**
         * @Route("/")
         */
        public function slash()
        {
            return $this->render('pages/home.html.twig');
        }


<<<<<<< HEAD
         /**
         * @Route("/admin")
         */
        public function admin()
        {
            return $this->render('pages/admin.html.twig');
        }
=======


        
>>>>>>> 6dccb34064c74b46b12bb507f1a5255f9a944c75
}