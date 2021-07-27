<?php

use Models as M;
require_once "bootstrap.php";

$newProductName = $argv[1];

$product = new M\Product();
$product->setName($newProductName);
$entityManager->persist($product);
// space for validation and so on

$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";
