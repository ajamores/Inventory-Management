<?php

use Core\Authenticator;
use Http\Forms\LoginForm;



$email = $_POST['email'];
$password = $_POST['password'];

//First check if form details are valid
$form = LoginForm::validate([
    'email' => $email,
    'password' => $password
]);

//NOW we authenticate the user 
//Check is the user first exists 

$auth = new Authenticator();
//if failed authentcation
if(! $auth->attempt($email, $password)){
    $form->error('auth', 'Invalid email or password');
}

//Otherwise redirect to main page
redirect('/');
