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
.news{
    display:flex;
    flex-direction:row;
    margin:0 400px 200px 200px;
}
.news img{
    height:300px;
    width:400px;
}
.news p{
    margin:80px 0 0 10px ;
    font-size:18px;
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
     <h3 style="text-align:center;">Epilarea definitiva este un tratament aparut inca din anii 1900</h3>
<div class="news">
    <img src="./img/new.jpg" alt="">
<p>Desi pare un tratament nou aparut pe piata, epilarea definitiva a fost descoperita inca din anii 1900, de catre dermatologii care foloseau lumina laser pentru eliminarea alunitelor. Ulterior, acestia au dezvoltat laserul pentru eliminarea firelor de par nedorite si, in scurt timp au fost lansate multiple tehnologii de epilare definitiva, cele mai cunoscute fiind laserul dioda si IPL-ul (lumina intens pulsata).</p>
</div>
  <?php
  include './components/footer.php"';
  ?> 
</body>
</html>