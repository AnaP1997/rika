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
body { margin:0}
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
    include './components/navru.php"';
    include './components/language.php"';
     ?> </div>
     <h2>Добро пожаловать в салон красоты Rika Esthetic!</h2>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="./img/laser.jpg" style="width:900px;height:500px;">
  <div class="text">Лазерная перманентная эпиляция</div>
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
<p>Мы стремимся помочь вам открыть для себя самую надежную версию себя с помощью широкого спектра услуг премиум-класса. Наша преданная команда специалистов по красоте предлагает вам индивидуальный подход и исключительные результаты, используя самые передовые технологии и высококачественные продукты.</p>
<p>1. ** Лазерная перманентная эпиляция: ** Наслаждайтесь гладкой кожей без волос с помощью передовой технологии лазерной эпиляции. Мы выполняем индивидуальные процедуры, адаптированные к вашим конкретным потребностям, чтобы обеспечить ваш комфорт и устойчивые результаты.</p>
<p>2. **Ремоделирование тела:** Преобразите свою фигуру и добейтесь четких контуров с помощью наших услуг по ремоделированию тела. Мы используем инновационные методы, такие как вакуумный массаж и электростимуляция, чтобы помочь вам устранить целлюлит, тонизировать кожу и естественным образом сформировать тело.</p>
<p>3. ** Ламинирование ресниц / бровей: ** Подчеркните красоту своих глаз с помощью наших услуг по ламинированию ресниц и бровей. Благодаря продуктам высочайшего качества мы можем предложить вам четкие, богатые и четко очерченные ресницы и брови для очаровательного и выразительного вида.</p>
<p>4. ** Восковая депиляция: ** Воспользуйтесь преимуществами гладкой и эффективной депиляции с нашими услугами восковой депиляции. Наша команда терапевтов поможет вам чувствовать себя комфортно во время процедуры, подарив вам идеальную кожу на долгие годы.</p>
<p>Мы гордимся нашим вниманием к деталям, расслабляющей атмосферой и индивидуальным подходом во всех предлагаемых нами услугах. В салоне красоты Rika Esthetic мы приглашаем вас побаловать и позаботиться о теле и разуме в гостеприимной и профессиональной обстановке. Мы ждем вас с распростертыми объятиями, чтобы помочь вам сиять в вашей подлинной красоте!</p>
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