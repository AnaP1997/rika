<?php
$c =mysqli_connect('localhost','root','','rika');
session_start();

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
form{
    max-width: 400px;
    max-height:200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
form button{
    width:80px;
    margin:10px 0 0 0;
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
            <a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./info.php">Informatii Clienti</a>
            <a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./activate.php">Activeaza Programari</a>  
        </div>
        
    </nav>
</header>  
<main>
<form action="./search_info.php" method="GET">
<label for="country">Telefon</label>
<input type="text" name="telefon">
<button type="submit" name="filters_submit" value="on">Cauta</button>
</form>
    
    <?php
        if(isset($_GET['filters_submit'])){
            
            $telefon=$_GET['telefon'];
    
        
        $sql="SELECT * FROM istoric_clienti
        WHERE telefon LIKE '%${telefon}%'";?>
        <div style="display:flex;flex-direction:column;">
        <?php
        $result = mysqli_query($c, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div style="display:flex;flex-direction:row;height:100px;margin:0 0 20px 0;">
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['nume']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['prenume']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['procedura']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['data']; ?></h4>
                    <h4 style="margin-top:90px;flex: 1; text-align: center;"><?php echo $row['observatii']; ?></h4>
                    
                </div>
     
            <?php            
               }
            }} else{ ?> <p style="margin-left:600px;"> <?php
            echo "Introdu numarul corect al clientului! </p>"; }  
            ?>
                
                </div>
</main>

<footer style="background-color:#E7D8C9;opacity:60%;height:80px;">
        <p style="padding-top:40px;text-align:center;font-size:20px;">&copy;2023 Rika Esthetic </p>
    </footer> 
</body>
</html>