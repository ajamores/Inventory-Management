<?php


use Http\Forms\LoginForm;
use Models\User;
use Core\App;

//Login form can be reused to validate form... maybe rename to AuthForm? 

$email = $_POST['email'];
$password = $_POST['password'];

//Note try/catch block in index so we have error handeling at a higher level
$form = LoginForm::validate([
    'email' => $email,
    'password' => $password,
]);

//Check with user model if email exists 
$db = App::resolve("Core\Database");
$user = new User($db);


if(! $user->find($email)){
    $form->error('email', 'Email already registered.')->throw();
}else{
    $user->store($email, $password);
}

redirect('/');
