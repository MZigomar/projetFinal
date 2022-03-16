<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsersController extends AbstractController
{

    #[Route('/user/{id}/delete', name:'user_delete')]
    public function delete(User $User, EntityManagerInterface $manager){
        $manager->remove($User);
        $manager->flush();
      
        return $this->redirectToRoute( route: "register");
  
  
  
  }

    #[Route('/users', name: 'users')]
    public function index(): Response
    {
        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }

    
}