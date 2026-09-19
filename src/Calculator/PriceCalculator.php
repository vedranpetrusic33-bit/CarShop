<?php

class PriceCalculator
{
    public static function calculateTotalPrice(array $products): float
    {
        $totalPrice = 0;

        foreach ($products as $product) {
            $totalPrice += $product->getPrice();
        }

        return $totalPrice;
    }
         
    public static function calculateTax(array $products): float
    {
        $totalTax = 0;

        foreach ($products as $product) {
            $totalTax += $product->getPrice() * 0.2; // Assuming a tax rate of 20%
        }

        return $totalTax;
    }

    public static function calculateShipping(array $products): float
    {

    $shippingPrice = 50;

    return count($products) * $shippingPrice;

    }

    public static function calculateTotal(array $products): float
    {
    $totalPrice = self::calculateTotalPrice($products);
    $tax = self::calculateTax($products);
    $shipping = self::calculateShipping($products);

    return $totalPrice + $shipping;
    }

}

?>
