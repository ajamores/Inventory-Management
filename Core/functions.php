<?php





/**
 * 
 * Die and dump, useful for debugging.
 * Have page dump aka output value onto page
 * and then kill the script, nothing afterwards runs 
 * @param  mixed $value
 * @return void
 */
function dd($value) {
    echo "Die and Dump function called";
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die(); //Used to terminate script, for debugging checking global variables like $_SERVER
}



/**
 * Handles http status code exceptions
 */
function abort($status = 404){
    
    http_response_code($status);
    match ($status) {
            404 => require(base_path('views/404.view.php')), 
            403 => require(base_path('views/403.view.php')),
            default => require(base_path('views/404.view.php')), //dont know yet 
        };
    
    die();
}




/**
 * Check  if url matches the current request uri from the server
 */
function urlIs($url){

    return $_SERVER['REQUEST_URI'] === $url; 
}



/**
 * Provides direct path to root project folder, can 
 * be used for any file directory needs
 */
function base_path($path){
    return BASE_PATH . $path;
}

/**
 * We load views all the time, best to use function for it and have it 
 * relative to the base_path 
 */
function view($path, $attributes){

    //The name of the variable is the key in this instance there is now a $heading variable
    extract($attributes);
    //dd($heading); for proof 

    //construct uri
    require base_path('views/' . $path);   // eg. root/views/index.php
}


/**
 * Get appropriate db set up 
 */
function getDbConfig() {
    static $config = null;
    
    if ($config === null) {
        $allConfigs = require base_path('config.php');
        $env = $_ENV['APP_ENV'] ?? 'dev';
        $config = $allConfigs[$env];
    }
    
    return $config;
}

