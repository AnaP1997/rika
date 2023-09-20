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
    .header{
        margin-left:100px;
    padding: 10px;
    display: flex;

    }
    h2{
        text-align:center;

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
* {box-sizing: border-box}
body {
    margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 900px;
  position: relative;
  margin: auto;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
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
     <h2>Bine ați venit la Salonul de Frumusețe Rika Esthetic!</h2>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="./img/i2.jpg" style="width:900px;height:500px;">
  <div class="text">Epilare definitivă cu laser</div>
</div>

<div class="mySlides fade">
  <img src="./img/laser.jpg" style="width:900px;height:500px;">
  <div class="text">Eficient</div>
</div>

<div class="mySlides fade">
  <img src="./img/i3.jpg" style="width:900px;height:500px;">
  <div class="text">Fara Durere</div>
</div>

<div class="mySlides fade">
  <img src="./img/anticel.jpg" style="width:900px;height:500px;">
  <div class="text">Remodelare corporală</div>
</div>

<div class="mySlides fade">
  <img src="./img/i1.jpg" style="width:900px;height:500px;">
  <div class="text">Rapid</div>
</div>

<div class="mySlides fade">
  <img src="./img/electro.jpg" style="width:900px;height:500px;">
  <div class="text">Rezultate Uimitoare</div>
</div>
<div class="mySlides fade">
  <img src="./img/laser.jpg" style="width:900px;height:500px;">
  <div class="text">Laminare gene/sprîncene</div>
</div>

<div class="mySlides fade">
  <img src="./img/i2.jpg" style="width:900px;height:500px;">
  <div class="text">Eficient</div>
</div>

<div class="mySlides fade">
  <img src="./img/i3.jpg" style="width:900px;height:500px;">
  <div class="text">Fara Durere</div>
</div>
<div class="mySlides fade">
  <img src="./img/ceara.jpg" style="width:900px;height:500px;">
  <div class="text">Depilare cu ceară</div>
</div>

<div class="mySlides fade">
  <img src="./img/i2.jpg" style="width:900px;height:500px;">
  <div class="text">Eficient</div>
</div>

<div class="mySlides fade">
  <img src="./img/i3.jpg" style="width:900px;height:500px;">
  <div class="text">Fara Durere</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<div style="margin:5px 200px 5px 200px">
<p>Ne angajăm să vă ajutăm să vă descoperiți cea mai încredere versiune a dumneavoastră prin intermediul unei game variate de servicii premium. Echipa noastră dedicată de specialiști în frumusețe vă oferă o experiență personalizată și rezultate excepționale, folosind cele mai avansate tehnologii și produse de înaltă calitate. 

</p><p><p style="font-weight: bold;">1.Epilare Definitivă cu Laser:</p>Experimentați o piele netedă și fără fire de păr nedorite cu ajutorul tehnologiei avansate a epilării definitive cu laser. Efectuăm proceduri personalizate, adaptate nevoilor dumneavoastră specifice, pentru a vă asigura confortul și rezultatele de durată.

</p><p><p style="font-weight: bold;">2.Remodelare Corporală:</p>Transformați-vă silueta și obțineți contururi definiate cu serviciile noastre de remodelare corporală. Folosim tehnici inovatoare, cum ar fi masaj cu vacuum și electrostimulare, pentru a vă ajuta să eliminați celulita, să tonifiați pielea și să sculptați corpul în mod natural.

</p><p><p style="font-weight: bold;">3.Laminare Gene/Sprâncene:</p> Accentuați frumusețea ochilor dumneavoastră cu ajutorul serviciilor noastre de laminare a genelor și sprâncenelor. Cu produse de cea mai bună calitate, vă putem oferi gene și sprâncene definite, bogate și bine definite, pentru o privire fermecătoare și expresivă.

</p><p><p style="font-weight: bold;">4.Depilare cu Ceară:</p> Beneficiați de o experiență de depilare netedă și eficientă cu serviciile noastre de depilare cu ceară. Echipa noastră de terapeuți vă va ajuta să vă simțiți confortabil în timpul procedurii, oferindu-vă o piele perfectă pentru mai mult timp.

</p><p>Ne mândrim cu atenția noastră la detalii, cu atmosfera relaxantă și cu abordarea personalizată în toate serviciile pe care le oferim. La Salonul de Frumusețe Rika Esthetic, vă invităm să vă răsfățați și să vă îngrijiți atât corpul, cât și mintea, într-un mediu primitor și profesionist. Vă așteptăm cu brațele deschise pentru a vă ajuta să străluciți în frumusețea dumneavoastră autentică!</p>
</div>
  <?php
  include './components/footer.php"';
  ?>
  <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script> 
</body>
</html>