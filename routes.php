<?php


$router->get('/', 'controllers/index.php');
$router->get('/products', 'controllers/products/index.php');
$router->get('/products/create', 'controllers/products/create.php');

$router->post('/products', 'controllers/products/store.php');
$router->patch('/products', 'controllers/products/edit.php');