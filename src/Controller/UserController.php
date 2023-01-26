<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/logout', name: 'app_logout_page', methods: ['GET'])]
    public function logout()
    {
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }

    #[Route('/profile', name: 'app_profile_page')]
    public function profile(): Response
    {
        return $this->render('user/profile.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/cart', name: 'app_cart_page')]
    public function cart(): Response
    {
        return $this->render('user/cart.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/wish', name: 'app_wish_page')]
    public function wish(): Response
    {
        return $this->render('user/wish.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

}
