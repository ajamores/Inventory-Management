<?php

use Core\App;
use Models\Product;

//The app uses container which contains the db, 
//The argument passed is the key  to the specific function you want in this 
//case, Our Database
$db = App::resolve('Core\Database');

//Have Product use this particular $db
$product = new Product($db);

//Model fetches data
$products = $product->allProducts();



// dd($products);

view('products/index.view.php', [
    'products' => $products
]);