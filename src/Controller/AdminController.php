<?php 
 namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\ApiController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ChapterOneRepository;
use App\Repository\ChapterTwoRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\ChapterOne;
use App\Form\ChapterOneType;
use Doctrine\Common\Persistence\ObjectManager;

 class AdminController extends AbstractController
 {

  /**
   * @var ChapterOneRepository
   * @var ChapterTwoRepository
   * @var ObjectManager
   */

   private $repository;
   private $repositoryScnd;
   private $maanger;

   public function __construct(ChapterOneRepository $repository, ChapterTwoRepository $repositoryScnd, ObjectManager $manager)
   {
     $this->manager = $manager;
     $this->repository = $repository;
     $this->repositoryScnd = $repositoryScnd;

   }


  /**
   * @Route("/admin")
   */
  public function administration()
  {
      return $this->render('pages/auth.html.twig');
  }


   /**
    *@Route("/admin/ok", name="admin")
    */
   public function adminnn()
   {
      $chapterOne = $this->repository->findAll();
      $chapterTwo = $this->repositoryScnd->findAll();
      return $this->render('pages/admin.html.twig', compact('chapterOne', 'chapterTwo'));
   }


    /**
    *@Route("/admin/ok/create", name="admin.create")
    */

    public function create(Request $request)
    {
        $chapterOne = new ChapterOne();
        $form = $this->createForm(ChapterOneType::class, $chapterOne);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
          $this->manager->persist($chapterOne);
          $this->manager->flush();
          return $this->redirectToRoute('admin');
        }
        return $this->render('pages/create.html.twig',[
          'chapterOne'=>$chapterOne,
          'form'      => $form->createView()
        ]); 
    }


   /**
    * @Route("/admin/ok/{id}", name="admin.edit", methods="GET|POST")
    */

    public function edit(ChapterOne $chapterOne, Request $request)
    {
        $form = $this->createForm(ChapterOneType::class, $chapterOne);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
          $this->manager->flush();
          return $this->redirectToRoute('admin');
        }
        return $this->render('pages/edit.html.twig',[
          'chapterOne'=>$chapterOne,
          'form'      => $form->createView()
        ]); 
    }

    /**
     * @Route("/admin/ok/{id}", name="admin.delete", methods="DELETE")
     */

     public function delete(ChapterOne $chapterOne)
     {
       $this->manager->remove($chapterOne);
       $this->manager->flush();
       
       return $this->redirectToRoute('admin'); 
       
     }





    

 }

