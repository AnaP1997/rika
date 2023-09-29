<?php
$c=mysqli_connect('localhost','root','','rika');
session_start();
if(!$c) die();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titlu = $_POST["titlu"];
    $text = $_POST["text"];
    
    // Verificăm dacă a fost încărcată o imagine
    if (isset($_FILES["imagine"]) && $_FILES["imagine"]["error"] == 0) {
        $upload_dir = "img/";
        $image_name = $_FILES["imagine"]["name"];
        $image_path = $upload_dir . $image_name;

        // Mutăm imaginea în directorul specificat
        move_uploaded_file($_FILES["imagine"]["tmp_name"], $image_path);
    } else {
        echo "Eroare la încărcarea imaginii.";
    }

    $id = bin2hex(random_bytes(9));
        
            $sql = "INSERT INTO noutati(id,titlu,descriere,imagine)
                    VALUES('$id','$titlu','$text','$image_name')";

            if (mysqli_query($c,$sql)) {
                $successMessage = "Programare Reusita ";
            } else {
                $errorMessage = "Ceva nu a mers,incercati din nou";
                echo mysqli_error($c);
            }
}
?>

<!DOCTYPE html>
<html>
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
        input[type="date"] {
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
        select{
            height:40px;
            width:100px;
            margin:10px;
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
    <a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./rikaprivate.php">Programări</a>
<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./search_info.php">Informații Clienți</a>
<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./activate.php">Activează Programări</a>
<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./addnews.php">Adaugă noutăți</a>
<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./register1.php">Adaugă specialist</a>
<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 30px; " href="./logout1.php">Ieșire</a>    
        </div>
        
    </nav>
</header> 
<head>
    <title>Formular Adăugare Noutăți</title>
</head>

<body>
    <h1>Adaugă anunț</h1>
    <div class="container">
    <form action="addnews.php" method="post" enctype="multipart/form-data">
        <label for="titlu">Titlu:</label>
        <input type="text" name="titlu" id="titlu" required><br><br>

        <label for="text">Text:</label><br>
        <textarea name="text" id="text" rows="4" cols="50" required></textarea><br><br>

        <label for="imagine">Încarcă o imagine:</label>
        <input type="file" name="imagine" id="imagine" accept="image/*" required><br><br>

        <input type="submit" value="Adaugă">
    </form>
    </div>
</body>
<footer style="background-color:#E7D8C9;opacity:60%;height:80px;margin-top:150px;">
        <p style="padding-top:40px;text-align:center;font-size:20px;">&copy;2023 Rika Esthetic </p>
    </footer> 
</html>
