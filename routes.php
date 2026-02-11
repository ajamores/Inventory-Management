<?php


$router->get('/', 'controllers/index.php');
$router->get('/products', 'controllers/products/index.php');
$router->get('/products/create', 'controllers/products/create.php');
$router->get('/products/edit', 'controllers/products/edit.php');

$router->post('/products', 'controllers/products/store.php');
$router->put('/products', 'controllers/products/update.php');
$router->delete('/products', 'controllers/products/destory.php');