<?php

use Core\Database;
use Models\Product;


$dbConfig = getDbConfig();  
$db = new Database($dbConfig, $dbConfig['username'], $dbConfig['password']);


//Have Product use this particular $db
$product = new Product($db);

//Model fetches data
$products = $product->allProducts();



// dd($products);

view('products/index.view.php', [
    'products' => $products
]);