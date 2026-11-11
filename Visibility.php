<?php

require_once "data/Product.php";

$product = new Product("Apple", 20000);

echo $product->getName() . "<br>";
echo $product->getPrice() . "<br>";

$dummy = new ProductDummy("Dummy", 1000);
$dummy->info();
