<?php

namespace App\Controller;

use App\Service\MyMailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private $myMailer;

    #[Route('/contact', name: 'app_contact_page')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
    public function sendMail($email,$objet, $message){
        $this->myMailer->sendEmail($email,$objet, $message);
        return new Response('Email sent!');
    }

}
