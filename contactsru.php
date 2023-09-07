<?php
 
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
.contacts{
    font-family:sans-serif;
    display:flex;
    flex-direction:row;
    margin:60px 0 250px 500px;
}
  </style>
    <title>Rika Esthetic</title>
</head>
<body>
    <div class="header">
    <?php
    include './components/logo.php"';
    include './components/navru.php"';
    include './components/language.php"';
     ?> </div>
     <div class="contacts">
        <img style="width:200px;height:300px;" src="./img/locatie.jpg" alt="">
        <div style="margin:40px;">
            <h3>Rika Esthetic</h3>
            <p><img style="width:20px;height:20px;" src="./img/location .png" alt="">2nd Street Aerodromului nr.2 , Кишинев, Молдова</p>
            <p><img style="width:20px;height:20px;" src="./img/telephone.png" alt=""> 0692 67 015</p>
            <p><img style="width:20px;height:20px;" src="./img/email.png" alt=""> rikaesthetic@yahoo.com</p>
        </div>
     </div>
     
  <?php
  include './components/footer.php"';
  ?> 
</body>
</html>