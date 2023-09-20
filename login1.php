<?php
$c=mysqli_connect('localhost','root','','rika');
session_start();

if (isset($_SESSION['logged_in_user'])) {
    header("Location: ./rikaprivate.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = FILTER_INPUT(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = FILTER_INPUT(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * FROM providers WHERE nume = '$username'";

        $result = mysqli_query($c,$sql);
        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {
                $successMessage = "You're logged in";
                $_SESSION['logged_in_user_id'] = $row['id'];
                header("Location: ./rikaprivate.php");
            } else {
        $error = "Nume de utilizator sau parolă incorectă". mysqli_error($c);
    }}
}
?>

<!DOCTYPE html>
<html lang="en">
    <style>
        body{
            background-color: #e3d5ca;
            margin:80px 0 0 400px;
            width: 600px;
            height: 450px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1{
            margin: 20px;
        }
        form{
            margin:40px 0 0 100px;
            display:flex;
            flex-direction:column;
        }
        input[type="text"], input[type="password"]{
            width: 60%;
            padding: 10px; 
            border: 1px solid #ccc;
            border-radius: 3px;
            background-color: #E7D8C9;
        }
        button{
            width: 50%;

        }
        @keyframes rotation {
  0% {
    transform: rotate3d(0, 1, 0, 0deg);
  }
  50% {
    transform: rotate3d(0, 1, 0, 180deg);
  }
  100% {
    transform: rotate3d(0, 1, 0, 360deg);
  }
}
        
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div style="margin-left:90px;display:flex;flex-direction:row;">
<img style="margin:10px 0 0 10px;height:60px; width:60px;border:1px solid #7a7a7a;border-radius:50px;  animation-name: rotation;
  animation-iteration-count: 1;
  animation-timing-function: linear;
  animation-duration: 2.5s;" src="./components/riika.jpg" alt=""><h1>Rika Esthetic</h1>
</div>
   

    <form method="POST" action="login1.php">
    
        <label for="username">Nume de utilizator:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Parolă:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit" name="login">Autentificare</button>
        <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php } ?>
    </form>
</body>
</html>
