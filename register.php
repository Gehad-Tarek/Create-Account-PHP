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
            background-size: 100% 155%;
            padding-top: 130px;
            padding-left: 30%;
            padding-right: 30%;
            text-align: center;
        }
        .color{
            color: #2c2a2a;
            font-weight: bold;
            font-size: 1.2rem;
        }
        h1{
            color: white;
        }
        input{
            width: 80%;
            margin-left: 5%;
            padding: 5px;
            margin-bottom: 20px;
        }      
        #remember{
            margin-top: -13px;
            margin-right: 50%;
            position: relative;
            color: #2c2a2a;
        }
        #checkbox{
            position: absolute;
            margin-left: -43%;
        }
        button{
            padding: 5px 4%;
            background-color: gray;
            color: white;
            text-align: center;
            border: 1px solid gray;
            border-radius: 5px;
        }

        button:hover{
            background-color: #6a6767; 
            border-color: #6a6767;
        }
    </style>
</head>
<body>
<?php 
        if (! empty($errors)) {
            foreach ($errors as $error) {
                echo '<div class="color">' . $error . '</div>';
            }
        }
        // if ( isset($_SESSION['user']) ) {
        //    echo "you already have an account"; 
        // }
    ?>
    <h1>Create An Account</h1>
    <form action="validate.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="confirm-password" placeholder="confirm-password">
        <h5 id="remember"><input id="checkbox" type="checkbox" name="Remember">Remember Me</h5> 
        <button>Create New Account</button>
        
    </form>
</body>
</html>