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
        public function slash()
        {
            return $this->render('pages/home.html.twig');
        }     

}