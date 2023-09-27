<?php
 $c =mysqli_connect('localhost','root','','rika');
 session_start();

 $sql = "SELECT * FROM noutati";
 
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
        body{ margin: 0 0 0 0;
            padding: 0;

            }
    .header{
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
.new{
  height: 90vh;
  background-size: cover;
  background-position: 75% 25%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.new p{
  font-family:Arial;
  color:#fefae0;
  animation-name:text-anim;
  animation-duration: 4s;
  font-size:40px;

}
  </style>
    <title>Rika Esthetic</title>
</head>
<body>
    <div class="header">
    <?php
    include './components/logo.php"';
    include './components/nav.php"';
    include './components/languageru.php"';
     ?> </div>
      <div style="display:flex;flex-direction:column;margin:0 0 130px 0;">
        <?php
        $result = mysqli_query($c, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div style="display:flex;flex-direction:column;width:900px;height:400px;margin:0px 0 180px 300px;">
                    <h2 style="margin-top:10px;flex: 1.5; text-align: center;"><?php echo $row['titlu']; ?></h2>
                    <br>
                    <div class="new" style="display:flex;flex-direction:row;margin-bottom:50px;background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)),
    url('./img/<?php echo $row['imagine']; ?>');">
                    
                
                    <p style="font-size:20px;margin-top:30px;text-align: center;"><?php echo $row['descriere']; ?></p>  
                  </div>
                    
                </div>
        <?php
          
}
        }
     ?>
    </div>
  <?php
  include './components/footer.php"';
  ?> 
</body>
</html>