<?php


use Core\Router;
use Core\Session;
use Core\ValidationException;


//Path to root folder
CONST BASE_PATH = __DIR__  . '/../'; //Current directory + go up a level

//Autoload php classes and packages
//IMPORTANT
//composer dump-autoload when you update ps4 autoload in composer.json
require BASE_PATH . '/vendor/autoload.php';

//Start session when index hit with request
session_start();


// Load .env
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeload();

require BASE_PATH . 'Core/functions.php';


//Create container for the app
require base_path('bootstrap.php');

//Router set up 
$router = new Router();
$routes = require(base_path('routes.php'));

//strip queries from url and obtain just the path
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//Remember that html only supports POST AND GET on forms so we pass values to the post as a workaround 
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];


//Handle error exception at highest level 
try{
    $router->route($uri, $method);
} catch(ValidationException $exception){
    //We flash the error when we try to route here instead of placeing this 
    //logic in every controoller
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old );
    
    redirect($router->previousUrl());
}

//Here we clear off any temporary session flash errors AFTER
//We route user to destination
Session::unflash();