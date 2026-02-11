<?php

namespace Core;

class Validator{


    
    
    /**
     * string
     *
     * Validates 2 things  
     * 1. That the input is above a specific char limit so not blank
     * 2. That it is within the specificed limit
     * 
     * 
     * @param  mixed $value - $_POST['body]
     * @param  mixed $min - can make it eg. 1 atleast 1 char must be saved
     * @param  mixed $max - can go up INF(Infinity) obviously make within reasonlable limits
     * @return void
     */
    public static function string($value, $min, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    
    /**
     * int
     *
     * Used to ensure correct range of numbers 
     * @param  mixed $value
     * @param  mixed $min
     * @param  mixed $max
     * @return void
     */
    public static function int($value, $min, $max = INF){

        return $value >= $min && $value <= $max;

    }


    
    /**
     * url
     * PHP has built in url checker omg
     * @param  mixed $value
     * @return void
     */
    public static function url($value) {
        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }
    


}