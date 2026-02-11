<?php

use Core\Database;
use Models\Product;


//Set up database connection
$config = require base_path('config.php');
$db = new Database($config['database']);

//Have Product use this particular $db
$product = new Product($db);

//Model fetches data
$products = $product->allProducts();



// dd($products);

view('products/index.view.php', [
    'products' => $products
]);