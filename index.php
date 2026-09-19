<?php

require_once 'src/Model/Address.php';
require_once 'src/Model/Customer.php';
require_once 'src/Model/Product.php';
require_once 'src/Model/Order.php';

$address = new Address(
    'Zagreb',
    'Croatia',
    'Ilica 10',
    '10000'
);

$customer = new Customer(
    'Vedran',
    'Petrušić',
    'vedran.petrusic@gmail.com',
    '0916202483',
    $address
);

$product1 = new Product(
    'BMW',
    'M3',
    50000,
    2022,
    'Black',
    30000
);

$product2 = new Product(
    'Audi',
    'A4',
    30000,
    2021,
    'White',
    45000
);

$product3 = new Product(
    'Mercedes',
    'C-Class',
    60000,
    2023,
    'Blue',
    20000
);

$order = new Order($customer);

$order->addProduct($product1);
$order->addProduct($product2);
$order->addProduct($product3);

var_dump($order);

echo "Product total: " . $order->getTotalPrice() . " €" . PHP_EOL;
echo "Tax: " . PriceCalculator::calculateTax($order->getProducts()) . " €" . PHP_EOL;
echo "Shipping: " . PriceCalculator::calculateShipping($order->getProducts()) . " €" . PHP_EOL;
echo "Total: " . $order->getTotal() . " €" . PHP_EOL;

?>