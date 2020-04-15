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
            padding-top: 40px;
            padding-left: 30%;
            padding-right: 30%;
            text-align: center;
        }
        .pink{
            color: pink;
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
        button{
            padding: 5px 4%;
            background-color: gray;
            margin-top: 20px;
            color: white;
            text-align: center;
            border: 1px solid gray;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<?php 
        if (! empty($errors)) {
            foreach ($errors as $error) {
                echo '<div class="pink">' . $error . '</div>';
            }
        }
    ?>
    <h1>Create An Account</h1>
    <form action="submit.php" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="password" name="confirm-password" placeholder="confirm-password">
        <button>Create New Account</button>
    </form>
</body>
</html>