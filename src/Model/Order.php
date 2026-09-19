<?php

require_once __DIR__ . '/../Calculator/PriceCalculator.php';

class Order
{
    protected Customer $customer;
    protected array $products = [];


    public function __construct(Customer $customer)
    {
    $this->customer = $customer;
    }

    public function addProduct(Product $product): void
    {
    $this->products[] = $product;
    }

    public function getTotalPrice(): float
    {
    return PriceCalculator::calculateTotalPrice($this->products);
    }

    public function getProducts(): array
    {
    return $this->products;
    }

    public function getTotal(): float
    {
    return PriceCalculator::calculateTotal($this->products);
    }
    
}

