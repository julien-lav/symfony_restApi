<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends FOSRestController
{

	private $userRepository;

	public function __construct(UserRepository $userRepository, EntityManagerInterface $em)
    {
		$this->userRepository = $userRepository;
		$this->em = $em;
    }
	
	/**
	 * @Route("/api/users", methods={"GET"})
	 * @Rest\View(serializerGroups={"user"})
	 * @return \FOS\RestBundle\View\View
	 */
	public function getUsersAction()
    {
		$users = $this->userRepository->findAll();
		return $this->view($users);
	}
	// "get_users"            [GET] /users
	
	/**
	 * @Route("/api/users/{id}", methods={"GET"})
	 * @Rest\View(serializerGroups={"user"})
	 */
	public function	getUserAction($id)
	{
	   	$user = $this->userRepository->find($id);
		return $this->view($user);
	} 
	// "get_user"             [GET] /users/{id}
	
	/**
	 * @Route("/api/users", methods={"POST"})
	 * @Rest\Post("/users")
	 * @Rest\View(serializerGroups={"user"})
	 * @ParamConverter("user", converter="fos_rest.request_body")
	 */
	public function	postUsersAction(User $user)
	{   	
	   	$this->em->persist($user);
	   	$this->em->flush();
	   	return $this->view($user);
	}
	// "post_users"           [POST] /users

	/**
	 * @Route("/api/users", methods={"PUT"})
	 * @Rest\View(serializerGroups={"user"})
	 */
    public function	putUserAction(Request $request, int $id)
	   {
           $user = $this->userRepository->find($id);

           $firstname = $request->get('firstName');

           $lastname = $request->get('lastName');
           $email = $request->get('email');
           //$birthday = $request->get('birthday');
           //if ($this->getUser() === $user)
           if ($this->getUser() === $user){

               if(isset($firstname)){
                   $user->setFirstname($firstname);
               }
               if(isset($lastname)){
                   $user->setLastname($lastname);
               }
               if(isset($email)){
                   $user->setEmail($email);
               }
               //if(isset($birthday)){
               //    $user->setBirthday($birthday);
               //}
               $this->em->persist($user);
               $this->em->flush();
           }
           return $this->view($user);
	   } 
	// "put_user"             [PUT] /users/{id}

	/**
	 * @Route("/api/users/{id}", methods={"DELETE"})
	 * @Rest\View(serializerGroups={"user"})
	 */
    public function	deleteUserAction($id)
	{
        $user = $this->userRepository->find($id);
	   	if ($this->getUser() === $user){
           $this->em->remove($user);
           $this->em->flush();
       }
	} 
	// "delete_user"          [DELETE] /users/{id}
}