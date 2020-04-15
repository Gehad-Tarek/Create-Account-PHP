<?php

$errors=[];

// validation

if(empty($_POST['username'])) {
    $errors['username'] = "UserName Is Required";
}

if(empty($_POST['email'])) {
    $errors['email'] = "Email Is Required";
}

if(empty($_POST['password'])) {
    $errors['password'] = "Password Is Required";
}

if(empty($_POST['confirm-password'])) {
    $errors['confirm-password'] = "ConfirmPassword Is Required";
}
if(strlen($_POST['password']) < 8) {
    $errors['password'] = "Number Of Charecters in the Password mustn't be less than 8";
}

if($_POST['password'] != $_POST['confirm-password']) {
    $errors['confirm-password'] = "Password and Confirm Password Must be identical";
}

if(! empty($errors)){
    require 'register.php';
}else{

    session_start();

    $_SESSION['user'] = $_POST['username'];
    $_SESSION['Email'] = $_POST['email'];
    $_SESSION['pass'] = $_POST['password'];
    $_SESSION['cpass'] = $_POST['confirm-password'];
    require 'index.php';

}

