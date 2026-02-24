<?php

namespace Core;

use Core\Session;


class Authenticator {
        
    /**
     * attempt
     * Attempt to find user by email and if found,
     * verify password against password hash 
     * @param  mixed $email - email from form
     * @param  mixed $password - password from form
     * @return true/false
     */
    public function attempt($email, $password){

        //Look for user first 
        $user = App::resolve('Core\Database')->query("SELECT * FROM users WHERE email = :email", [
            'email' => $email
        ])->find();

        //If found, verify password 
        if($user){

            if(password_verify($password, $user['password'])){
                
                $this->login(['email' => $email,]);

                return true;
                
            } 
        } else {
            return false;
        }
    }

    /**
     * good practice is that you regenerate the session id.. remember the session file found in temp.
     * update the cookie and session file name just in case malicious user gets that id. 
     */
    public function login($user){
            //Start session that user has logged in
        $_SESSION['user'] = [
            'email' => $user['email'],
        ];

        session_regenerate_id(true ); // Here we update the session after logging in BEST PRACTICE 
    }

        
    /**
     * logout
     * Destroy current session aka logout
     * @return void
     */
    public function logout(){
        
        Session::destroy();
    }

}