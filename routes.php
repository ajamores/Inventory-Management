<?php


$router->get('/', 'controllers/index.php')->only('auth');

$router->get('/login', 'controllers/session/create.php')->only('guest');
$router->post('/session', 'controllers/session/store.php')->only('guest');
$router->delete('/session', 'controllers/session/destroy.php');

$router->get('/register', 'controllers/registration/create.php')->only('auth');
$router->post('/register', 'controllers/registration/store.php')->only('auth');


$router->get('/products', 'controllers/products/index.php')->only('auth');
$router->get('/products/create', 'controllers/products/create.php')->only('auth');
$router->get('/products/edit', 'controllers/products/edit.php')->only('auth');
$router->get('/reports', 'controllers/reports.php')->only('auth');

$router->post('/products', 'controllers/products/store.php')->only('auth');
$router->put('/products', 'controllers/products/update.php')->only('auth');
$router->delete('/products', 'controllers/products/destory.php')->only('auth');