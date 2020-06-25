<?php

namespace App\Controller;

use App\DTO\SaleDTO;
use App\Entity\Product;
use App\Form\SaleType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("{_locale}/cart")
 */
class CartController extends AbstractController
{
    /**
     * @Route("/", name="cart_index")
     */
    public function index()
    {
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
        ]);
    }

    /**
     * @Route("/{id}/add", name="cart_add")
     * @param SessionInterface $session
     * @param Product $product
     * @return RedirectResponse
     */
    public function AddSale(SessionInterface $session, Product $product)
    {
        // créer une vente
        $sale = new SaleDTO();
        $sale->setCount(1);
        $sale->setProduct($product);

//        // Ajouter la vente dans la session
        $cart = $session->get('cart', new ArrayCollection());
        $cart->add($sale);
        $session->set('cart', $cart);

        return $this->redirectToRoute('product_index');
    }

    /**
     * @Route("/show", name="cart_show")
     * @param Request $request
     * @param SessionInterface $session
     * @return Response
     */
    public function show(Request $request, SessionInterface $session)
    {
        $cart = $session->get('cart', new ArrayCollection());
        $em = $this->getDoctrine()->getManager();
        foreach ($cart as $dto) {
            $em->persist($dto->getProduct());
        }
        $form = $this->createForm(CollectionType::class, $cart, [
            'entry_type' => SaleType::class,
            'allow_delete' => true,
            'entry_options' => [
                'data_class' => SaleDTO::class,
            ]
        ]);
        $form->handleRequest($request);

        $price = 0;
        foreach ($cart as $sale) {
            $price += ($sale->getCount() * $sale->getProduct()->getPrice());
        }
        if ($form->isSubmitted()) {
            $price = 0;
            foreach ($form->getData() as $sale) {
                $price += ($sale->getCount() * $sale->getProduct()->getPrice());
            }
        }
        return $this->render('cart/index.html.twig', [
            'form' => $form->createView(),
            'price' => $price
        ]);
    }

    /**
     * @Route("/{id}/remove", name="cart_remove_product")
     * @param SessionInterface $session
     * @param Product $product
     * @return RedirectResponse
     */
    public function remove(SessionInterface $session, Product $product)
    {
        $cart = $session->get('cart');
        $productToRemove = $cart->filter(function($element) use ($product) {
            return $element->getProduct() == $product;
        });
        dump($cart, $productToRemove->first());
        $cart->removeElement($productToRemove->first());
        dump($cart);
        return $this->redirectToRoute('cart_show');
    }

    /**
     * @Route("/empty", name="cart_empty")
     * @param SessionInterface $session
     * @return RedirectResponse
     */
    public function delete(SessionInterface $session)
    {
        $session->set('cart', new ArrayCollection());
        return $this->redirectToRoute('product_index');
    }
}
