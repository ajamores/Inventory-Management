<?php

namespace Core\Middleware;

/**
 * Refactor to interface? 
 */
class Auth implements MiddlewareInterface{

    /**
     * handle
     * Determines whether or not the request can continue to the Core of application
     * @return void
     */
    public function handle(): void{
        
        if(! $_SESSION['user'] ?? false){
            header('location: /');
            exit();
        }

    }
}