<?php


use Core\App;
use Models\Product;


$db = App::resolve('Core\Database');
//FETCH THE PRODUCT FIRST and abort if not found
if(!isset($_POST['id']) || !is_numeric($_POST['id'])){
    abort(404);
}

$product = new Product($db);

if($product->destroy($_POST['id'])){
    header('location: /products');
    exit();
} else {
    abort(404);
}