<?php

namespace App\Controller;
use App\Repository\ChapterOneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController  extends ApiController
{

   /**
    * @Route("/movies", methods="GET")
    */
    public function index(ChapterOneRepository $chapterOneRepository)
    {
        $chapterOne = $chapterOneRepository->transformAll();

        return $this->respond($chapterOne);
    }




}