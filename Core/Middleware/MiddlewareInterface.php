<?php

namespace Core\Middleware;

/**
 * Allow for type safety with middlewares,
 * void returns nothing so if you returning something
 * your breaking the behaviour  
 */
interface MiddlewareInterface{

    public function handle(): void;

}