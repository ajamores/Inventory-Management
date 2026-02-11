<?php


 return [
    'dev' => [
        'host' =>'localhost',
        'port' => 3306,
        'dbname' => 'garland',
        'charset' => 'utf8mb4',
        'username' => 'root',
        'password' => '',
    ],

    'docker' => [
        'host' => 'db',           
        'port' => 3306,
        'dbname' => 'garland',
        'username' => 'garland_user', 
        'password' => 'secretpassword', 
        'charset' => 'utf8mb4'
    ],

];