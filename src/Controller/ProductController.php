<?php

namespace App\Controller;

use App\DTO\SaleDTO;
use App\Entity\Product;
use App\Form\ProductType;
use App\Form\SaleType;
use App\Repository\ProductRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("{_locale}/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="product_index", methods={"GET"})
     * @param Request $request
     * @param ProductRepository $productRepository
     * @return Response
     */
    public function index(Request $request, ProductRepository $productRepository): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="product_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {

        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}", name="product_show", methods={"GET", "POST"})
     * @param Request $request
     * @param Product $product
     * @param SessionInterface $session
     * @return Response
     */
    public function show(Request $request, Product $product, SessionInterface $session): Response
    {
        $sale = new SaleDTO();
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $sale->setProduct($product);
        $form = $this->createForm(SaleType::class, $sale, []);
        $form->handleRequest($request);

        if ($form->isSubmitted()){
            $cart = $session->get('cart', new ArrayCollection());
            if (!$cart->exists(function($key, $value) use ($form) {return $value->getId() == $form->getData()->getId();})) {
                $cart->add($form->getData());
                $session->set('cart', $cart);
                return $this->redirectToRoute('product_index');
            }
            $saleToUpdate = $cart->filter(function ($sale) use ($form) {
                return $sale->getId() == $form->getData()->getId();
            });
            $count = $saleToUpdate->first()->getCount() + $form->getData()->getCount();
            $saleToUpdate->first()->setCount($count);

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/show.html.twig', [
            'product' => $product,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="product_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('product_index');
    }
}
