<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController  extends Controller
{
         /**
         * @Route("/")
         * @Route("/test")
         */
        public function app()
        {
            return $this->render('pages/home.html.twig');
        }     

<<<<<<< HEAD
=======
        




        
>>>>>>> dc60510c96708c52cf5069afc160e97fc8f6cec9
}