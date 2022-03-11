<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    #[Route('/', name: 'app_homepage')]
=======
    #[Route('/homepage', name: 'app_homepage')]
>>>>>>> 69303dd (création de la branche homepage)
=======
    #[Route('/', name: 'app_homepage')]
>>>>>>> 739a3cb (tet)
=======
    #[Route('/', name: 'app_homepage')]
>>>>>>> cf5eedb23ac84bd675e1fda3ebe28769ec443674
    public function index(): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}
