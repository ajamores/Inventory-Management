<?php

Use Core\App;
Use Core\Container;
Use Core\Database;

/**
 * This file will bootstrap or intialize things we need throughout the project 
 * that way there are not multiple calls towards the same objects ex. Database
 */



//put what we need in this special box
$container = new Container();

//Assign the key and our function to set up DB into our speical box
$container->bind('Core\Database', function() {
    
    $config = getDbConfig();
    return new Database($config,  $config['username'], $config['password']);
});


//Set the box for use within the app 
App::setContainer($container);
