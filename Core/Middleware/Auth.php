<?php

namespace Core\Middleware;

use Core\Session;

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
            Session::flash('errors', ['auth' => 'Unauthoirzed access, please login to view']);
            header('location: /login');
            exit();
        }

    }
}