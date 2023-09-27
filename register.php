<?php
     $c=mysqli_connect('localhost','root','','rika');
    session_start();


    if (isset($_POST["register"])) {
        $login = FILTER_INPUT(INPUT_POST, 'login', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = FILTER_INPUT(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = FILTER_INPUT(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $password2 = FILTER_INPUT(INPUT_POST, 'password2', FILTER_SANITIZE_SPECIAL_CHARS);
        $telefon = FILTER_INPUT(INPUT_POST, 'telefon', FILTER_SANITIZE_SPECIAL_CHARS);
        if (strlen($login) < 2) {
            $loginError = "Login is too short";
        }

        if (strlen($password) < 4) {
            $passwordError = "Password is too short";
        }

        if ($password !== $password2) {
            $confirmError = "Passwords do not match";
        }

        if (!isset($loginError) && !isset($passwordError) && !isset($confirmError)) {
            $id = bin2hex(random_bytes(16));
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(id, nume, email, password,telefon)
                    VALUES('$id', '$login','$email', '$hashedPassword','$telefon')";

            if (mysqli_query($c,$sql)) {
                $successMessage = "User creat <a style='text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; ' href='./index.php'>Acasa</a> ";
            } else {
                $errorMessage = "Ceva nu a mers!";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <style>
        body{
            background-color: #e3d5ca;
            margin:80px 0 0 400px;
            width: 600px;
            height: 500px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1{
            margin: 20px;
        }
        form{
            margin:30px 0 0 80px;
            display:flex;
            flex-direction:column;
        }
        input[type="text"], input[type="password"], input[type="email"], input[type="phone"]{
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
   <title>Register</title>
    
</head>
<body>
<div style="margin-left:90px;display:flex;flex-direction:row;">
<img style="margin:10px 0 0 10px;height:60px; width:60px;border:1px solid #7a7a7a;border-radius:50px;  animation-name: rotation;
  animation-iteration-count: 1;
  animation-timing-function: linear;
  animation-duration: 2.5s;" src="./components/riika.jpg" alt=""><h1>Rika Esthetic Register</h1>
</div>
   
    <div class="register" style="
    width:500px; height:500px;">
        
        <form action="./register.php" method="POST" style="padding:20px 0 0 140px;">
        <input type="text" name="login" placeholder="Login" required>
            <span>
                <?php if(isset($loginError)) echo $loginError; ?>
            </span>
            <br>
            <input type="email" name="email" placeholder="Email" required>
            <span></span>
            <br>
            <input type="phone" name="telefon" placeholder="Telefon ex:61234567" required>
            <span></span>
            <br>
            <input type="password" name="password" placeholder="Password" required>
            <span>
                <?php if(isset($passwordError)) echo $passwordError; ?>
            </span>
            <br>
            <input type="password" name="password2" placeholder="Confirm Password" required>
            <span>
                <?php if(isset($confirmError)) echo $confirmError; ?>
            </span>
            <br>
            <button type="submit" name="register" value="register">Register</button>
        </form>
        <p style="color:black; margin-left:40px;"><?php if(isset($successMessage)) echo $successMessage; ?>
    </div>
    </form>

<footer style="background-color:#E7D8C9;opacity:60%;height:80px;">
        <p style="padding-top:40px;text-align:center;font-size:20px;width:100%;">&copy;2023 Rika Esthetic </p>
    </footer> 
</body>
</html>