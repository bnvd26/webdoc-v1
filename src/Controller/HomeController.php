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
        public function app()
        {
            return $this->render('pages/home.html.twig');
        }

         /**
         * @Route("/questions/{id}")
         */
        public function questions()
        {
            return $this->render('pages/home.html.twig');
        }

        /**
         * @Route("/questions/{id}/result")
         */
        public function graf()
        {
            return $this->render('pages/home.html.twig');
        }

        /**
         * @Route("/summary")
         */
        public function summary()
        {
            return $this->render('pages/home.html.twig');
        }


        /**
         * @Route("/chapterOne/{id}")
         */
        public function chapterOnet()
        {
            return $this->render('pages/home.html.twig');
        }

        




        
}