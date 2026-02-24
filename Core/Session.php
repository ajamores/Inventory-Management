<?php

namespace Core;



/**
 * Session
 * class to modify and control sessions
 */
class Session{
    
    /**
     * has
     *Check if session key exists
     * @param  mixed $key
     * @return void
     */
    public static function has($key){
        return (bool) static::get($key);
    }
    
    /**
     * put
     * update session data with new data 
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public static function put($key, $value){
        $_SESSION[$key] = $value;
    }
    
    /**
     * get
     * Returns session key value
     * @param  mixed $key
     * @param  mixed $default
     * @return void
     */
    public static function get($key, $default = null){

        if(isset($_SESSION['_flash'][$key])){
            return $_SESSION['_flash'][$key];
        }
        
        return $_SESSION[$key] ?? $default;
    }
    
    /**
     * flash
     * Set session data meant for short ttl 
     * ie. errors 
     * @param  mixed $key
     * @param  mixed $value
     * @return void
     */
    public static function flash($key, $value){

        $_SESSION['_flash'][$key] = $value;
    }

        
    /**
     * unflash
     * unset session '_flash' data 
     * @return void
     */
    public static function unflash(){
        unset($_SESSION['_flash']);
    }
    
    /**
     * flush
     * Clear server side session data 
     * @return void
     */
    public static function flush(){
        $_SESSION = [];
    }
    
    /**
     * destroy
     * Empty $_SESSION = [],
     * Destroys all data registered to a session
     * @return void
     */
    public static function destroy(){
        
        static::flush(); //Clear session data
        session_destroy(); // destroy server side session!!!

        //Manually remove client cookie 
        $params = session_get_cookie_params();
        //Recreate the cookie, but set it to expire hence the time - 3600
        setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly'] );

    }
}