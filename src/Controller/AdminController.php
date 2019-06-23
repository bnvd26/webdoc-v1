<?php 
 namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Controller\ApiController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ChapterOneRepository;
use App\Repository\ChapterTwoRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\ChapterOne;
use App\Entity\ChapterTwo;
use App\Form\ChapterOneType;
use App\Form\ChapterTwoType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use App\Entity\User;



 class AdminController extends AbstractController
 {

  /**
   * @var ChapterOneRepository
   * @var ChapterTwoRepository
   * @var ObjectManager
   */

   private $repository;
   private $repositoryScnd;
   private $manager;

   public function __construct(ChapterOneRepository $repository, ChapterTwoRepository $repositoryScnd, ObjectManager $manager)
   {
     $this->manager = $manager;
     $this->repository = $repository;
     $this->repositoryScnd = $repositoryScnd;

   }


  /**
   * @Route("api/connexion", name="admin.connexion")
   */
  public function administration()
  {
      return $this->render('pages/auth.html.twig');
  }


  /**
   * @Route("api/admin/logout", name="admin.logout")
   */
  public function logOut()
  {
  
  }


   /**
    *@Route("api/admin/chapters", name="admin", methods="GET|POST")
    */
   public function admin()
   {
 
      $chapterOne = $this->repository->findAll();
      $chapterTwo = $this->repositoryScnd->findAll();
      return $this->render('pages/admin.html.twig', compact('chapterOne', 'chapterTwo'));
 

   }


    /**
    *@Route("api/admin/chapters/chapterOne/create", name="admin.create.one", methods="POST|GET")
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
    *@Route("api/admin/chapters/chapterTwo/create", name="admin.create.two", methods="POST|GET")
    */

    public function createTwo(Request $request)
    {
        $chapterTwo = new ChapterTwo();
        $form = $this->createForm(ChapterTwoType::class, $chapterTwo);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
          $this->manager->persist($chapterTwo);
          $this->manager->flush();
          return $this->redirectToRoute('admin');
        }
        return $this->render('pages/create.html.twig',[
          'chapterTwo'=>$chapterTwo,
          'form'      => $form->createView()
        ]); 
    }    


   /**
    * @Route("api/admin/chapters/chapterOne/edit{id}", name="admin.edit.one", methods="GET|POST")
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
    * @Route("api/admin/chapters/chapterTwo/edit{id}", name="admin.edit.two", methods="GET|POST")
    */

    public function editTwo(ChapterTwo $chapterTwo, Request $request)
    {
        $form = $this->createForm(ChapterTwoType::class, $chapterTwo);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
          $this->manager->flush();
          return $this->redirectToRoute('admin');
        }
        return $this->render('pages/edit.html.twig',[
          'chapterTwo'=>$chapterTwo,
          'form'      => $form->createView()
        ]); 
    }

    /**
     * @Route("api/admin/chapters/chapterOne/{id}", name="admin.delete.one", methods="DELETE")
     */

     public function delete(ChapterOne $chapterOne)
     {
       $this->manager->remove($chapterOne);
       $this->manager->flush();
       
       return $this->redirectToRoute('admin'); 
       
     }


    /**
     * @Route("api/admin/chapters/chapterTwo/{id}", name="admin.delete.two", methods="DELETE")
     */

    public function deleteTwo(ChapterTwo $chapterTwo)
    {
      $this->manager->remove($chapterTwo);
      $this->manager->flush();
      
      return $this->redirectToRoute('admin'); 
      
    }     





    

 }

