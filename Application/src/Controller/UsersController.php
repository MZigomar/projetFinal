<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    #[Route('/users', name: 'users')]
    public function index(): Response
    {
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }
}



 #[Route("/user/{id}/delete", name="user_delete")]
 #[param User $User]
 #[return RedirectReponse]


public function delete(User $User)
{
    $em = $this->getDoctrine()->getManager();
    $em->remove($User):
    $em->flush();
  
    return $this->redirectToRoute( route: "register");
}