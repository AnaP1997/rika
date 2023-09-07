<?php
     $c=mysqli_connect('localhost','root','','rika');
    session_start();
    if(!$c) die();
    /*if (!$c) {
        die("Conexiunea la baza de date a eșuat: " . mysqli_connect_error());
    } else {
        echo "Conexiunea la baza de date a fost stabilită cu succes!";
    }*/
    if (isset($_POST["program"])) {
        $data = FILTER_INPUT(INPUT_POST, 'data', FILTER_SANITIZE_SPECIAL_CHARS);
        $ora = FILTER_INPUT(INPUT_POST, 'ora', FILTER_SANITIZE_SPECIAL_CHARS);


            $id = bin2hex(random_bytes(16));
        
            $sql = "INSERT INTO programari_active(id_prog_activ,data,ora)
                    VALUES('$id','$data','$ora')";

            if (mysqli_query($c,$sql)) {
                $successMessage = "Programare Reusita ";
            } else {
                $errorMessage = "Ceva nu a mers,incercati din nou";
                echo mysqli_error($c);
            }
        }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programare</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        header{
    margin-left:100px;
    padding: 10px;
    display: flex;
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
<header>
    <div style="display: flex; flex-direction: row; padding:5px;font-family:'Audiowide', sans-serif;margin:0;"
 class="logo">
        <img style="margin-top:-5px;margin-right:150px;height:90px; width:90px;border:1px solid #7a7a7a;border-radius:50px;  animation-name: rotation;
  animation-iteration-count: 1;
  animation-timing-function: linear;
  animation-duration: 2.5s;" src="./components/riika.jpg" alt="">
   </div>
   <nav style="font-family:Arial;font-size:18px; margin:30px; padding:10px; ">
    

    <div   class="links">
            <a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./rikaprivate.php">Programari</a>
            <a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./search_info.php">Informatii Clienti</a>
            <a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./activate.php">Activeaza Programari</a>  
        </div>
        
    </nav>
</header> 
     <main style="margin:10px;">
    <div class="container">
        <h1>Rika Esthetic</h1>

        <form action="./activate.php" method="post" style="padding:30px;margin:0 0 20px 0;">

            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required>

            <label for="ora">Ora:</label>
            <input type="time" id="ora" name="ora" required>

            <button type="submit" name="program" value="program">Creeaza Programare</button>
            <p style="color: white; margin-left:40px;"><?php if(isset($successMessage)) echo $successMessage; ?></p>
        <p style="color: red"><?php if(isset($errorMessage)) echo $errorMessage; ?></p>
    
        </form>
    </div>
    </main>
    <footer style="background-color:#E7D8C9;opacity:60%;height:80px;">
        <p style="padding-top:40px;text-align:center;font-size:20px;">&copy;2023 Rika Esthetic </p>
    </footer> 
</body>
</html>
