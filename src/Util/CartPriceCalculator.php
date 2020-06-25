<?php
namespace App\Util;

use Doctrine\Common\Collections\ArrayCollection;

class CartPriceCalculator
{
    public function calculate(ArrayCollection $cart)
    {
        $price = 0;
        foreach ($cart as $sale) {
            $price += ($sale->getCount() * $sale->getProduct()->getPrice());
        }
        return $price;
    }
}