<?php

use App\Database\DatabaseController;
use App\Controller\RegisterController;

require_once realpath('vendor/autoload.php');

$obj = new RegisterController();

$name = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$last_name = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$confirm_pass = filter_input(INPUT_POST, 'confirm-password', FILTER_SANITIZE_EMAIL);

if ($pass != $confirm_pass) {
    echo 'Passwords do not match';
    die;
}

if(strlen($pass) < 8 && strlen($confirm_pass) < 8){
    echo 'Passwords does not meet the maximum length';
    die;
}

$obj->register($name, $last_name, $email, $username, $pass);