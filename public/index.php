<?php


use Core\Router;

//Path to root folder
CONST BASE_PATH = __DIR__  . '/../'; //Current directory + go up a level


require BASE_PATH . 'Core/functions.php';



//autoload files when needed it when we need it
spl_autoload_register(function ($class){
    
    //Implementing namespace Core in Database.php changes path to Core\Database
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class );
 
    
    require base_path($class . '.php');
});

$router = new Router();

$routes = require(base_path('routes.php'));

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
// dd($_POST);
//Remember forms dont natively support nothing other than get and post
//
$router->route($uri, $method);

