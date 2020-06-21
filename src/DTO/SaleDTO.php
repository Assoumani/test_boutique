<?php


namespace App\DTO;


use App\Entity\Product;

class SaleDTO
{
    private $id;
    private $count;
    private $product;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     * @return SaleDTO
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        if ($this->product) {
            return $this->product;
        }
        return new Product();
    }

    /**
     * @param Product $product
     * @return SaleDTO
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->id = $product->getId();
        return $this;
    }

}