<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Product;
use App\Entity\Sale;
use App\Form\CartType;
use App\Form\SaleType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/cart")
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
        $sale = new Sale();
        $sale->setCount(1);
        $sale->setProduct($product);

        // Ajouter la vente dans la session
        $cart = $session->get('cart', new Cart());
        $cart->addSale($sale);
        $session->set('cart', $cart);

        return $this->redirectToRoute('product_index');
    }

    /**
     * @Route("/show", name="cart_show")
     * @param SessionInterface $session
     * @return Response
     */
    public function show(SessionInterface $session)
    {
        $cart = $session->get('cart', new Cart());
        dump($cart->getSales()[0]);
        $form = $this->createForm(CartType::class, $cart, []);

        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            'form' => $form->createView()
        ]);
    }
}
