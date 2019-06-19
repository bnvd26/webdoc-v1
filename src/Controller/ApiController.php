<?php
namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Repository\ChapterOneRepository;
use App\Repository\ChapterTwoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


class ApiController
{

   /**
    * @Route("api/details/chapterOne", methods="GET")
    */
    public function chapterOne(ChapterOneRepository $chapterOneRepository, ChapterTwoRepository $chapterTwoRepository)
    {
        $chapterOne = $chapterOneRepository->transformAll();
        

        return $this->respond($chapterOne);
    }


    /**
    * @Route("api/details/chapterTwo", methods="GET")
    */
    public function chapterTwo(ChapterTwoRepository $chapterTwoRepository)
    {
       
        $chapterTwo = $chapterTwoRepository->transformAll();

        return $this->respond($chapterTwo);
    }



    /**
    * @Route("api/details", methods="POST")
    */
    public function create(Request $request, ChapterOneRepository $chapterOneRepository, EntityManagerInterface $em)
    {
        $request = $this->transformJsonBody($request);

        if (! $request) {
            return $this->respondValidationError('Please provide a valid request!');
        }

        // validate the title
        if (! $request->get('title')) {
            return $this->respondValidationError('Please provide a title!');
        }

        // persist the new movie
        $chapterOne = new Movie;
        
        $chapterOne->setTitle($request->get('title'));
        $chapterOne->setContent($request->get('content'));
        $chapterOne->setImageBackground($request->get('imageBackground'));
        $chapterOne->setMusic($request->get('music'));
        $em->persist($chapterOne);
        $em->flush();

        return $this->respondCreated($chapterOneRepository->transform($chapterOne));
    }

   
        
 

    /**
     * @var integer HTTP status code - 200 (OK) by default
     */
    protected $statusCode = 200;



    /**
     * Gets the value of statusCode.
     *
     * @return integer
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets the value of statusCode.
     *
     * @param integer $statusCode the status code
     *
     * @return self
     */
    protected function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Returns a JSON response
     *
     * @param array $data
     * @param array $headers
     *
     * @return Symfony\Component\HttpFoundation\JsonResponse
     */
    public function respond($data, $headers = [])
    {
        return new JsonResponse($data, $this->getStatusCode(), $headers);
    }

    /**
     * Sets an error message and returns a JSON response
     *
     * @param string $errors
     *
     * @return Symfony\Component\HttpFoundation\JsonResponse
     */
    public function respondWithErrors($errors, $headers = [])
    {
        $data = [
            'errors' => $errors,
        ];

        return new JsonResponse($data, $this->getStatusCode(), $headers);
    }

    /**
     * Returns a 401 Unauthorized http response
     *
     * @param string $message
     *
     * @return Symfony\Component\HttpFoundation\JsonResponse
     */
    public function respondUnauthorized($message = 'Not authorized!')
    {
        return $this->setStatusCode(401)->respondWithErrors($message);
    }

    /**
     * Returns a 422 Unprocessable Entity
     *
     * @param string $message
     *
     * @return Symfony\Component\HttpFoundation\JsonResponse
     */
    public function respondValidationError($message = 'Validation errors')
    {
        return $this->setStatusCode(422)->respondWithErrors($message);
    }

    /**
     * Returns a 404 Not Found
     *
     * @param string $message
     *
     * @return Symfony\Component\HttpFoundation\JsonResponse
     */
    public function respondNotFound($message = 'Not found!')
    {
        return $this->setStatusCode(404)->respondWithErrors($message);
    }

    /**
     * Returns a 201 Created
     *
     * @param array $data
     *
     * @return Symfony\Component\HttpFoundation\JsonResponse
     */
    public function respondCreated($data = [])
    {
        return $this->setStatusCode(201)->respond($data);
    }

}