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
     main{
        font-family:sans-serif;
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
.about{
    height:700px;
    width:1200px;
    display:flex;
    flex-direction:row;
    margin-left:200px ;
}
.about p{
    font-size:20px;
}

  </style>
    <title>Rika Esthetic</title>
</head>
<body>
    <div class="header">
    <?php
    include './components/logo.php"';
    include './components/nav.php"';
     ?> </div>
     <br>
     <br>
     <main>
     <h1 style="width:900px;margin-left:350px;"> La Clinica Rika Esthetic , timpul dumneavoastră de tratament va fi relaxant și plăcut din momentul în care ajungeți. Suntem atât de încrezători în rezultatele tratamentului nostru de îndepărtare a părului cu laser, încât oferim chiar și o garanție de preț.</h1>
<div class="about">
    <div><p>Clinica Rika Esthetic este una dintre cele mai importante clinici de epilare cu laser din Chișinău, oferind cel mai avansat tratament la cele mai competitive prețuri. Epilarea cu laser rapidă, eficientă și fără durere este specialitatea noastră, iar rezultatele noastre vorbesc de la sine.
Investiția noastră în Alma Soprano Titanium Laser garantează clienților noștri cea mai eficientă epilare cu laser. 100% sigur și fără durere, Laserul Alma Soprano Titanium înseamnă că nu mai trebuie să vă temeți de programările pentru îndepărtarea părului.</p>
<p>Tratamentul anticelulitic prin masaj are o eficacitate deosebită, pentru că ajută la reducerea substanțială a stratului adipos și eliminarea celulitei
Clinica Rika Esthetic  vă oferă masaj anticelulitic cu cele mai eficiente și moderne aparate, si cele mai bune servicii de masaj executat de specialiștii noștri!</p>
<p>Obține rezultate similare intervenției chirurgicale, fără durere, fără timp de recuperare, fără costuri exorbitante! În plus, cât timp celulele adipoase sunt eliminate în mod natural din organism, pielea se strânge și se tonifiază în zona tratată! Slăbește exact de unde vrei tu cu masaj anticelulitic cu vacuum. </p>
<p>Te invităm să-ți faci o programare pentru a vedea pe propria piele rezultatele remarcabile!</p></div>
<img style="height:400px;width:600px;margin-top:80px;margin-left:5px;" src="./img/about.jpg" alt="">
</div>
</main> 
  <?php
  include './components/footer.php"';
  ?> 
</body>
</html>