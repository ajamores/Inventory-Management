<?php


$router->get('/', 'controllers/index.php');
$router->get('/products', 'controllers/products/index.php');
$router->get('/products/create', 'controllers/products/create.php');