<?php
    $c=mysqli_connect('localhost','root','','rika');
    session_start();

    if (isset($_SESSION['logged_in_user_id'])) {
        header("Location: ./rikaprivate.php");
    }

    if (isset($_POST["login_btn"])) {
        $login = FILTER_INPUT(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = FILTER_INPUT(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        $log="rika_admin";
        $pass="admin";
            if (password_verify($password, $pass)) {
                $successMessage = "You're logged in";
            
            } else {
                $errorMessage = "Something went wrong";
            }
        } else {
            $errorMessage = "Something went wrong";
        }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Rika Esthetic</title>
    <style>
        body{
            background:black;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="date"], input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Rika Esthetic</h1>
        <form action="./rikaprivate.php" method="POST" style="padding:40px 0 0 140px;">
            <input type="text" name="login" placeholder="Login" required>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <br>
            <button type="submit" name="login_btn" value="login">Login</button>
        </form>
    </div>
</body>
</html>