<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    
    #[Route("/panier", name:"cart_index")]
    
    public function index()
    {
        return $this->render('cart/index.html.twig', []);
    }

    #[Route("/panier/add/{id}", name:"cart_add")]

    public function add($id, Request $request) {
        $session = $request->getSession();

        $panier = $session->get('panier', []);

        $panier[$id] = 1;

        $session->set('panier', $panier);

        dd($session->get('panier'));
    }
}
