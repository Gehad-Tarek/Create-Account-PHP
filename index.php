<?php 

// session_start();

if(isset($_SESSION['user'])) {

    echo "<h1>Welcome " . $_SESSION['user'] . "</h1>";

    echo "<h4>if you want to delete this account and create a new one, press logout button</h4>";

    echo "<a href='logout.php'><input class='logout' type='button' value ='logout' name='logout'></a>";

}else {
    echo "<a href='register.php' class= 'createAccount'>Create Account</a>";
}

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
            background-size: 100% 150%;
            padding-top: 190px;
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
    .createAccount{
            padding: 5px 4%;
            background-color: gray;
            color: white;
            margin-top: 100px;
            text-align: center;
            border: 1px solid gray;
            border-radius: 5px;
            text-decoration: none;
    }
    </style>
</head>
<body>
    
</body>
</html>