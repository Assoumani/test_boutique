<?php

namespace App\Controller;

use App\DTO\SaleDTO;
use App\Entity\Cart;
use App\Entity\Product;
use App\Entity\Sale;
use App\Form\CartType;
use App\Form\SaleType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
        dump($cart);
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
            dump($form->getData());
            $price = 0;
            foreach ($form->getData() as $sale) {
                $price += ($sale->getCount() * $sale->getProduct()->getPrice());
            }
        }
        dump($price);
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            'form' => $form->createView(),
            'price' => $price
        ]);
    }

    /**
     * @Route("/delete", name="cart_delete")
     * @param Request $request
     * @param SessionInterface $session
     * @return RedirectResponse
     */
    public function edit(Request $request, SessionInterface $session)
    {
        $session->set('cart', new ArrayCollection());
        return $this->redirectToRoute('product_index');
    }
}
