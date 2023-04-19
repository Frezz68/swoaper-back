<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\GroupByFormType;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ProductController extends AbstractController
{
    public function __construct(private Security $security){}

    #[Route('/store', name: 'app_store_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        $form = $this->createForm(GroupByFormType::class);

        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
            'groupByForm' => $form->createView(),
        ]);
    }

    #[Route('/store/new', name: 'app_store_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProductRepository $productRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productRepository->save($product, true);

            return $this->redirectToRoute('app_store_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/store/{id}', name: 'app_store_show', methods: ['GET'])]
    public function show(Product $product, ProductRepository $productRepository): Response
    {
        $user = $this->security->getUser();
        
        if($user) {
            return $this->render('product/show.html.twig', [
                'product' => $product,
                'products' => $productRepository->findAll(),
                'user' => $user
            ]);
        }

        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/store/{id}/edit', name: 'app_store_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, ProductRepository $productRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $productRepository->save($product, true);

            return $this->redirectToRoute('app_store_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/store/{id}', name: 'app_store_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, ProductRepository $productRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $productRepository->remove($product, true);
        }

        return $this->redirectToRoute('app_store_index', [], Response::HTTP_SEE_OTHER);
    }
}
