<?php


$router->get('/', 'controllers/index.php')->only('auth');

$router->get('/login', 'controllers/session/create.php')->only('guest');
$router->post('/session', 'controllers/session/store.php');

$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');


$router->get('/products', 'controllers/products/index.php')->only('auth');
$router->get('/products/create', 'controllers/products/create.php');
$router->get('/products/edit', 'controllers/products/edit.php');
$router->get('/reports', 'controllers/reports.php');

$router->post('/products', 'controllers/products/store.php');
$router->put('/products', 'controllers/products/update.php');
$router->delete('/products', 'controllers/products/destory.php');