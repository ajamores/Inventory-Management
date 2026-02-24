<?php


use Http\Forms\LoginForm;
use Core\Database;

//Login form can be reused to validate form... maybe rename to AuthForm? 

$email = $_POST['email'];
$password = $_POST['password'];

//Note try/catch block in index so we have error handeling at a higher level
$form = LoginForm::validate([
    'email' => $email,
    'password' => $password,
]);
