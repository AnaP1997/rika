<?php
$c =mysqli_connect('localhost','root','','rika');
session_start();
if (!isset($_SESSION['logged_in_user_id'])) {
    header("Location: ./rikaprivate.php");
}else {
$sql="SELECT * FROM programari";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <style>
  body{ 
    margin: 0 0 0 0;
    padding: 0;

     }
     header{
    margin-left:100px;
    padding: 10px;
    display: flex;

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
.antet{
    position: fixed;
    width: 100%;
}
h3{
    margin:30px 60px 20px 60px;
}
input{

    margin:90px 40px 40px 40px;
height:40px;
width:160px;
}
button{
    margin:90px 40px 40px 40px;
    height:40px;
    width:40px;
}

  </style>
    <title>Rika Esthetic</title>
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
<main>
    <div class="antet" style="display:flex;flex-direction:row;background-color:#E7D8C9;opacity:60%;height:80px;">
        <h3 style="margin-left:80px;">Nume</h3>
        <h3>Prenume</h3>
        <h3>Telefon</h3>
        <h3>Serviciu</h3>
        <h3 style="margin-left:80px;">Data</h3>
        <h3 style="margin-left:100px;">Ora</h3>
        <h3 style="margin-left:100px;">Observatii</h3>
    </div>
    <form action="./info_client.php" method="post">
    <div style="display:flex;flex-direction:column;">
        <?php
        $result = mysqli_query($c, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div style="display:flex;flex-direction:row;height:100px;margin:0 0 20px 0;">
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['nume']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['prenume']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['telefon']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['serviciu']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['data']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['ora']; ?></h4>
                    <input id="obs" name="obs" type="text">
                    <input type='hidden' name='id' value='" . $row["id_prog"] . "'>
                    <button type="submit" name="done" value="done">✔</button></form>
                </div>
        <?php
          

        }
        }
        ?>
    </div>
</main>

<footer style="background-color:#E7D8C9;opacity:60%;height:80px;">
        <p style="padding-top:40px;text-align:center;font-size:20px;">&copy;2023 Rika Esthetic </p>
    </footer> 
</body>
</html>