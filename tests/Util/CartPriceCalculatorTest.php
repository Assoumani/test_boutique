<?php


namespace App\Tests\Util;

use App\DTO\SaleDTO;
use App\Entity\Product;
use App\Util\CartPriceCalculator;
use Doctrine\Common\Collections\ArrayCollection;
use PHPUnit\Framework\TestCase;

class CartPriceCalculatorTest extends TestCase
{
    public function testCalculate()
    {
        $calculator = new CartPriceCalculator();

        $product1 = new Product();
        $product1->setPrice(100.50);
        $product2 = new Product();
        $product2->setPrice(50.50);

        $sale1 = new SaleDTO();
        $sale1->setProduct($product1);
        $sale1->setCount(3);
        $sale2 = new SaleDTO();
        $sale2->setProduct($product2);
        $sale2->setCount(2);

        $cart = new ArrayCollection([$sale1, $sale2]);

        $result = $calculator->calculate($cart);

        $this->assertEquals(402.50, $result);
    }
}