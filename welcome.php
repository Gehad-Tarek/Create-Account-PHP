<?php 

// session_start();

 if (isset($_COOKIE['user'])) {

    echo "<h1>Welcome " . $_COOKIE['user'] . "</h1>";
    
    echo "<h4>if you want to delete this account and create a new one, press logout button</h4>";

    echo "<a href='logout.php'><input class='logout' type='button' value ='logout' name='logout'></a>";

} else if(isset($_SESSION['user'])) {

    echo "<h1>Welcome " . $_SESSION['user'] . "</h1>";
    
    echo "<h4>if you want to delete this account and create a new one, press logout button</h4>";

    echo "<a href='logout.php'><input class='logout' type='button' value ='logout' name='logout'></a>";

}
//  else {
//     require 'unregistered.php';
// }

// echo "<pre>";
 
// print_r($_SESSION);

// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
    body{
        background-image: url('background.jpg');
        background-repeat: no-repeat;
        background-size: 100% 120%;
        padding-top: 230px;
        padding-left: 30%;
        padding-right: 30%;
        text-align: center;
        color: white;
        }
    .logout{
        padding: 5px 4%;
        background-color: gray;
        color: white;
        text-align: center;
        border: 1px solid gray;
        border-radius: 5px;
    }
    .logout:hover{
        background-color: #6a6767; 
        border-color: #6a6767;
    }
    h1, h4{
        color: #2c2a2a;
    }
    </style>
</head>
<body>
</body>
</html>