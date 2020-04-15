<?php

session_start();

if(isset($_SESSION['user'])) {

    session_unset();
    session_destroy();
    require 'register.php';
}
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
