<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/produits', name: 'products_')]
class ProductsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProductRepository $productrepo): Response
    {
        return $this->render('products/index.html.twig', [
            'product' => $productrepo->findAllWithImages()
        ]);
    }
    #[Route('/{slug}', name: 'details')]
    public function details(Product $product): Response
    {
        return $this->render('products/details.html.twig', [
            'product' => $product
        ]);
    }

}
