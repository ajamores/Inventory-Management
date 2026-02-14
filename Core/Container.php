<?php

namespace Core;


/**
 * Container used so that we can use tools like the Database without 
 * having to repeadetly re-establish connection... The app will
 * pull the database from the container and it will be avaiallbe all throught the app
 */
class Container{

    //Array of functions to run eg. setting up db
    protected $bindings = [];
    
        
    /**
     * bind aka add to container
     *
     * @param  mixed $key - the id to the function
     * @param  mixed $function
     * @return void
     */
    public function bind($key, $function){

        $this->bindings[$key] = $function;

    }
        
    /**
     * resolve or remove from the container
     *
     * @param  mixed $key - the key to what you want 
     * @return void
     */
    public function resolve($key){
        
        //Check for the key 
        if(!array_key_exists($key, $this->bindings)){
            throw new \Exception('No matching binding for {$key}');
        }

        $function = $this->bindings[$key];

        //calls the function 
        return call_user_func($function);
    }

}