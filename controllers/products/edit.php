<?php



use Core\Database;
use Models\Product;

$dbConfig = getDbConfig();  
$db = new Database($dbConfig, $dbConfig['username'], $dbConfig['password']);


//covers id queries for empty and not set
if(!isset($_GET['id']) || empty($_GET['id'])){
    abort(404);
}

//obtain the id from the get request
$id = $_GET['id'];

//cover none existent ids and redirect them to 404
//first we need to get the model and have it talk to the db

$model = new Product($db);

$product = $model->find($id);




view('products/edit.view.php', [
    'errors' => [],
    'heading' => 'Editing Product ID:' . $id,
    'product' => $product
]);