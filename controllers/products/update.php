<?php

// dd($_SERVER);

use Core\Database;
use Core\Validator;
use Models\Product;

$dbConfig = getDbConfig();  
$db = new Database($dbConfig, $dbConfig['username'], $dbConfig['password']);


//check if id is even there and abort if not found
if(!isset($_POST['id']) || !is_numeric($_POST['id'])){
    abort(404);
}

$id = (int)$_POST['id'];

// get product first make sure it exists 
$model = new Product($db);
$product = $model->find($id);

if(!$product){
    abort(404);
}



$errors = [];

//Get form information 
$name = $_POST['name'];
$sku = $_POST['sku'];
$category = $_POST['category'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$imageUrl = $_POST['image_url'];



// Validate information... could be refactored but for now leave, these are all the checks 

if(!Validator::string($name,3, 100)){
    $errors['name'] = 'Name must be betweeen 3 and 100 characters';
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
    $errors['quantity'] = 'Can only accept order between 1-100 quantity';
}

if(!Validator::url($imageUrl)){
    $errors['image_url'] = 'Please enter a valid image url';
}



//If data is clean use the model to put new data resource
if(empty($errors)){

    $result = $model->edit($_POST);

    if(!$result['success']){
        $errors['sku'] = $result['error']; 
    }
}


//Check again if there are any errors

if(!empty($errors)){
    return view('products/edit.view.php', [
        'product' => $product,
        'errors' => $errors,
        'heading' => 'Edit Product ID: ' . $product['id']
    ]);
} else{
    header('location: /products');
    die();
}


