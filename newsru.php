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
    include './components/navru.php"';
    include './components/language.php"';
     ?> </div>
     <h3 style="text-align:center;">Перманентная эпиляция — это процедура, появившаяся с 1900-х годов</h3>
<div class="news">
    <img src="./img/new.jpg" alt="">
<p>Хотя это кажется новым методом лечения на рынке, перманентное удаление волос было открыто в 1900-х годах дерматологами, которые использовали лазерный свет для удаления родинок. Впоследствии они разработали лазер для удаления нежелательных волосков, и за короткое время было запущено несколько технологий перманентного удаления волос, наиболее известными из которых являются диодный лазер и IPL (интенсивный импульсный свет).</p>
</div>
  <?php
  include './components/footer.php"';
  ?> 
</body>
</html>