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

    if (isset($_POST['Remember'])) {    // if user check remember me

        setcookie("user", $_POST['username'], time() + 3600);
        setcookie("email", $_POST['email'], time() + 3600);
        setcookie("pass", $_POST['password'], time() + 3600);
        setcookie("cpass", $_POST['confirm-password'], time() + 3600);
        // echo 'stored in cookies';
        require 'welcome.php';

    } else {     // if user dosen't check remember me

        session_start();
        $_SESSION['user'] = $_POST['username'];
        $_SESSION['Email'] = $_POST['email'];
        $_SESSION['pass'] = $_POST['password'];
        $_SESSION['cpass'] = $_POST['confirm-password'];
        require 'welcome.php';

}
    // require 'welcome.php';
}
