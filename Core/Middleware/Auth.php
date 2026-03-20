<?php

namespace Core\Middleware;

use Core\Session;

class Auth implements MiddlewareInterface {

    public function handle(): void {

        if (! $_SESSION['user'] ?? false) {
            $uri = $_SERVER['REQUEST_URI'];

            if ($uri !== '/') {
                Session::flash('errors', ['auth' => 'Unauthorized access, please login to view']);
            }

            header('location: /login');
            exit();
        }

    }
}