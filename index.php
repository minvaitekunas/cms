<?php

use Models\Product;

include_once "bootstrap.php";

function redirect_to_root(){
    header("Location: " . parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
}

// Add new product

if(isset($_POST['name'])){
    $product = new Product();
    $product->setName($_POST['name']);
    $entityManager->persist($product);
    $entityManager->flush();
   // redirect_to_root();
}

print("<pre>Add new product: " . "</pre>");
?>
<form action="" method="POST">
  <label for="name">Product name: </label><br>
  <input type="text" name="name" value="Doe"><br>
  <input type="submit" value="Submit">
</form> 
<hr>

<pre style="display: inline">Once you understood these, you can start working with relations - click</pre>
<a href="Relations"><pre style="display: inline">here</pre></a><pre style="display: inline"> when you are ready 🔥🔥🔥</pre>