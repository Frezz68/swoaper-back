<?php

namespace App\Controller;

use App\Entity\Fav;
use App\Entity\Product;
use App\Entity\User;
use App\Form\GroupByFormType;
use App\Form\ProductType;
use App\Repository\FavRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class WishController extends AbstractController
{
    public function __construct(private Security $security){}

    #[Route('/wish', name: 'app_wish_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager, ProductRepository $productRepository): Response
    {
        $user = $this->getUser();

        $favRepository = $entityManager->getRepository(Fav::class);

        $wishes = $favRepository->findBy(['_user' => $user]);

        $productsRepository = $entityManager->getRepository(Product::class);

        $arrayOfProducts = [];

        $products = $productsRepository->findAll();

        return $this->render('wish/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('/wish/{id}/add', name: 'app_wish_add', methods: ['GET', 'POST'])]
    public function add(EntityManagerInterface $entityManager, Product $product, Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $user = $this->security->getUser();

        $favoris = new Fav();
        $favoris->setUser($user);
        $favoris->setProduct($product);

        $favRepository = $entityManager->getRepository(Fav::class)->save($favoris, true);

        $route = $request->headers->get('referer');

        return $this->redirect($route);
    }

    #[Route('/wish/{id}/remove', name: 'app_wish_remove', methods: ['GET', 'POST'])]
    public function remove(EntityManagerInterface $entityManager, Fav $favoris, Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $favRepository = $entityManager->getRepository(Fav::class)->remove($favoris, true);

        $route = $request->headers->get('referer');

        return $this->redirect($route);
    }
}
