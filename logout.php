<?php

session_start();

if(isset($_SESSION['user'])) {

    session_unset();
    session_destroy();

} else if (isset($_COOKIE['user'])) {
    setcookie("user", '', time() - 3600);
    setcookie("email", '', time() - 3600);
    setcookie("pass", '', time() - 3600);
    setcookie("cpass", '', time() - 3600);
}

    echo "<h3> You Successfully logout. <br> <a href='unregistered.php'>Click here</a> If You Want To Login Again </h3>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{
        background-image: url('background.jpg');
        background-repeat: no-repeat;
        background-size: 100% 120%;
        padding-top: 250px;
        padding-left: 30%;
        padding-right: 30%;
        text-align: center;
        color: white;
        }
    h3{
        line-height: 1.8rem;
        color: #2c2a2a;
    }
    </style>
</head>
<body>
</body>
</html>