 <?php

use Core\Database;
use Models\Product;

$dbConfig = getDbConfig();  
$db = new Database($dbConfig, $dbConfig['username'], $dbConfig['password']);


$model = new Product($db);

$products = $model->allProducts();
$lowStock =0;
$length = 0;

$last5Prods;

$categories = []; 

if(!empty($products)){

    $length = count($products);

    foreach($products as $product){
        if($product['quantity'] <= 10){
            $lowStock++;
        }

        if(!in_array($product['category'], $categories )){
            $categories [] = $product['category'];
        }
    }

    $last5Prods = array_slice($products, -5);
} else{
    //load dummy data
}





    

//Connect users to  to view
view("index.view.php", [
    'heading' => 'Home',
    'length' => $length,
    'lowStock' => $lowStock,
    'totalCategories' => count($categories),
    'last5Prods' => $last5Prods
]);

 