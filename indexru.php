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
  body{ 
    margin: 0 0 0 0;
    padding: 0;

     }
  header{
    margin-left:100px;
    padding: 10px;
    display: flex;

    }
   .main-idx {
  background-image: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)),
    url("./img/rika.jpg");
  height: 90vh;
  background-size: cover;
  background-position: 75% 25%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.main-idx h1{
  font-family:Arial;
  color:#fefae0;
  animation-name:text-anim;
  animation-duration: 4s;
  font-size:40px;

}
@keyframes text-anim {
  0% {
    font-size:70px;
  }
  100% {
    font-size:40px;
  }
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
.services{
  width:1000px;
  background: rgb(255,232,214);
  background: linear-gradient(180deg, rgba(255,232,214,1) 0%, rgba(203,153,126,1) 50%);
  opacity: 90%;
  border-radius:25px;
  display: flex;
  flex-direction:row;
  margin-left:150px ;
 margin-top:-40px;
 padding:30px 130px 30px 130px;
}
.services p{
  display: flex;
  flex-direction:column;
  margin:40px 60px 40px 60px;


}
.services img{
  height:130px;
  width: 130px;
  border-radius:70px;

}
.services button{
  border:none;
  background-color:#edc4b3;
  border-radius:5px;
  padding:5px;
  margin-top:5px ;
  font-size:16px;
}
.i-fr{
  margin-left:600px;
  margin-top:50px;
  font-family:cursive;
  color:#6c584c;
}
.intr{
  width:900px;
  display: flex;
  flex-direction:row;
 padding:30px 130px 30px 130px;
 margin-left:80px;
  
}
.intr p{
  display: flex;
  flex-direction:column;
  margin:40px;
  font-size:20px;
}
.intr img{
  height:260px;
  width: 300px;
  border-radius:40px;
}
.curs{
  margin:50px 0 0 700px;
  font-family:cursive;
  color:#6c584c;
}
  .cursuri{
  display: flex;
  flex-direction:row;
  
}
.cursuri p{
  font-size:30px;
  font-family:sans-serif;
}
.rezerva{
  border:none;
  background-color:#B2967D;
  border-radius:5px;
  padding:20px;
  font-size:40px;
  color:white;
  margin:100px 0 80px 500px ;
 opacity: 60%;
  
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
    <?php
    include './components/navru.php"';
    include './components/language.php"';
     ?> </header>
    
     <main>
      <div class="main-idx">
            <h1>Место, где сочетается 
                элегантность и комфорт</h1>
        </div>          

     <div class="services">
    
        <p><img src="./img/anticel.jpg" alt="">Антицеллюлитный массаж<button>Подробности</button></p>
        <p><img src="./img/electro.jpg" alt="">Электростимуляция<button style="margin-top:22px">Подробности</button></p>
        <p><img src="./img/laser.jpg" alt="">Лазерная эпиляция<button>Подробности</button></p>
        <p><img src="./img/gene.jpg" alt="">Ламинирование ресниц<button>Подробности</button></p>

     </div>
    <div>
    <div class="i-fr"><h1>Вопросы и ответы</h1></div>
    <div class="intr">
      <p><img src="./img/i1.jpg" alt="">Как выбрать лучшее лечение анцеллюлита?</p>
      <p><img src="./img/i2.jpg" alt="">Можно ли делать перманентную эпиляцию летом?</p>
      <p><img src="./img/i3.jpg" alt="">Сколько сеансов лечения требуется?</p>
    </div>
    </div>
    <div>
    <div class="curs"><h1>Курсы</h1></div>
    <div class="cursuri">
      <p><img style="border-radius:0 100px 100px 0;width:800px;height:300px;margin-left:0;" src="./img/ceara.jpg" alt="">Вощение</p>
      <p style="margin-top:100px">Сахарная эпиляция<img style="border-radius:0 0 0 70px;width:779px;height:250px;margin-left:-60px;" src="./img/zahar.jpg" alt=""></p>
    </div>
    </div>
    <button class="rezerva"><a style="text-decoration: none;color:white;" href="./appointmentru.php">Записаться на прием</a></button>
</main> 
  <?php
  include './components/footer.php"';
  ?> 
</body>
</html>