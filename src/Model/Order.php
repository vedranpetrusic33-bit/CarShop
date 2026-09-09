<?php

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
    
}

