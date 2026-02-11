<?php

use Core\Database;
use Core\Validator;
use Models\Product;


// dd($_POST);  //debug, see if route hits and what it recieves 

$config = require base_path('config.php');
$db = new Database($config['database']);

//If this is empty by the end the product will be stored, otherwise errors will be throwm
$errors = [];

//Get form information 
$name = $_POST['name'];
$sku = $_POST['sku'];
$category = $_POST['category'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$imageUrl = $_POST['image_url'];

// Validate information... could be refactored but for now lets handle like so for clarity 

if(!Validator::string($name,3, 50)){
    $errors['name'] = 'Name must be betweeen 3 and 50 characters';
}

if(!Validator::string($sku,3, 10)){
    $errors['sku'] = 'SKU must be betweeen 3 and 10 characters';
}

if(!Validator::string($category, 5, 50)){
    $errors['category'] = 'Category must be between 5 and 50 chars';
}

if(!Validator::string($type, 5, 100)){
    $errors['type'] = 'Type must be between 5 and 100 chars';
}

if(!Validator::int($quantity, 1, 100)){
    $errors['quantity'] = 'Can only accept order between 1-50 quantity';
}

if(!Validator::url($imageUrl)){
    $errors['image_url'] = 'Please enter a valid image url';
}



//If data is clean call the model to post new data resource
if(empty($errors)){

    $product = new Product($db);

    $result = $product->store($_POST);

    if(!$result['success']){
        $errors['sku'] = $result['error']; 
    }
}

//Check again if there are any errors

if(!empty($errors)){
    return view('products/create.view.php', [
        'errors' => $errors,
        'heading' => 'Add a Product'
    ]);
} else{
    header('location: /products');
    die();
}

















