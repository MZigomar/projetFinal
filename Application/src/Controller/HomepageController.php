<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'acceuil_')]
class HomepageController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProductRepository $productrepo): Response
    {
        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'la page d\'acceuil',
            'product' => $productrepo->findRecentProducts()
        ]);
    }
}
