<?php
  $c=mysqli_connect('localhost','root','','rika');
    session_start();
    if (!isset($_SESSION['logged_in_user_id_1'])) {
        
    } else {
        $id = $_SESSION['logged_in_user_id_1'];

        $sql = "SELECT * FROM users WHERE id = '$id'";

        $result = mysqli_query($c,$sql);
        if ($row = mysqli_fetch_assoc($result)) {

        } 
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
#myDIV {
  opacity:60%;
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: rgb(255,232,214);
  margin-top: 20px;
  display:none;
}
#myDIV1 {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: rgb(255,232,214);
  margin-top: 20px;
  display:none;
}
#myDIV2 {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: rgb(255,232,214);
  margin-top: 20px;
  display:none;
}
#myDIV3 {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: rgb(255,232,214);
  margin-top: 20px;
  display:none;
}
.qa{
  position: relative;
  width: 50%;
}
.int{
  display: block;
  width: 100%;
  height: auto;
}
.overlay{
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #edc4b3;
  border-radius:20px;
}
.qa:hover .overlay{
  opacity: 1;
}
.rs{
  color: white;
  font-size: 20px;
  position:relative;
  top: 30%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}

  </style>
    <title>Rika Esthetic</title>
</head>
<body>
    <header>
    <div style="display: flex; flex-direction: row; padding:5px;font-family:'Audiowide', sans-serif;margin:0;"
 class="logo">
        <img style="margin-top:-5px;margin-right:60px;height:90px; width:90px;border:1px solid #7a7a7a;border-radius:50px;  animation-name: rotation;
  animation-iteration-count: 1;
  animation-timing-function: linear;
  animation-duration: 2.5s;" src="./components/riika.jpg" alt="">
   </div>
    <?php
    include './components/nav.php"';
    include './components/languageru.php"';
     ?> 
     <?php
   
    if  (isset($_SESSION['logged_in_user_id_1'])) {
      echo '<a style="text-decoration: none;color:black;margin:38px 0 0 60px;font-size:18px;" href="./myprog.php">Programările mele</a>';
      echo '<h1 style="margin:38px 0 0 40px;color:#d4a373;font-size:20px;">' . $row['nume'] . '</h1>';
        
        echo '<a style="text-decoration: none;color:black;margin:38px 0 0 70px;font-size:18px;" href="./logout.php">Ieșire</a>';
    } else {
        
        echo '<a style="text-decoration: none;color:black;margin-left:100px;margin-top:40px;font-size:18px;" href="./login.php">Login</a>';
    }
    ?>
    </header>
    
     <main>
      <div class="main-idx">
            <h1>Locul unde se îmbină eleganța
                  și confortul</h1>
        </div>          

     <div class="services">
    
        <p id="div1"><img src="./img/anticel.jpg" alt="">Masaj anticelulitic<button onclick="showDiv1()">Detalii</button></p>
        <div id="myDIV"><p>La clinica Rika Esthetic se folosește aparatul Vacuum și Miostimulare pentru slăbire localizată și reducerea celulitei.Acele „bule de grasime” sunt practic, sparte, in timpul masajului anticelulitic, micsorandu-se, astfel, stratul de celulita pe care tu il ai. Masajul are rolul nu numai de a elimina o cantitate semnificativa de grasime din corpul tau dar, va avea efecte benefice si asupra muschilor.</p><button onclick="hideDiv1()"><</button> </div>
        <p id="div2"><img src="./img/electro.jpg" alt="">Electrostimulare<button onclick="showDiv2()">Detalii</button></p>
        <div id="myDIV1"><p>Vă prezentăm avantajele electrostimularii!Această tehnologie revoluționară tonifică mușchii și stimulează circulația sângelui. Rezultatul? Un corp sculptat și energie debordantă!Electrostimularea ajută la reducerea grăsimii abdominale și la creșterea masei musculare, oferindu-vă o siluetă perfectă. </p><button onclick="hideDiv2()"><</button> </div>
        <p id="div3"><img src="./img/laser.jpg" alt="">Epilare cu laser<button onclick="showDiv3()">Detalii</button></p>
        <div id="myDIV2"><p>Epilare cu laser❤️
3 lungimi de unda 
Cel mai performant laser la ora actuala la nivel internațional cit și in Moldova!</p><button onclick="hideDiv3()"><</button> </div>
        <p id="div4"><img src="./img/gene.jpg" alt="">Laminarea genelor<button onclick="showDiv4()">Detalii</button></p>
        <div id="myDIV3"><p>Pocedura corectă de tratare profesională a laminării genelor. Rezultate excelente și incredibile pentru clientele noastre!!</p><button onclick="hideDiv4()"><</button> </div>
        

     </div>
    <div>
    <div class="i-fr"><h1>Întrebări frecvente</h1></div>
    <div class="intr">
<div class="qa">
<p><img class="int" src="./img/i1.jpg" alt="">Cum să alegi cel mai bun tratament anicelulitic?</p>
  <div class="overlay">
    <div class="rs"><p>Cel mai indicat este sa mergi la o evaluare corporala pentru a vedea de ce anume ai nevoie si de a primi un plan de tratament personalizat.In clinica Rika Esthetic consuntatiile sunt gratuite si complet neangajante.</p></div></div>    
</div>
<div class="qa">
<p><img class="int" src="./img/i2.jpg" alt="">Se poate face epilare definitivă în perioada verii?</p>
<div class="overlay">
  <div class="rs">
    <p>Da,se poate,atata timp cat se respecta recomandarile primite de la specialistii nostri.Aceasta vizeaza perioada de dinaintea terapiei precum si recomandari care trebuie respectate dupa efectuarea terapiei.</p>

  </div>

</div>

</div>
      <div class="qa">
      <p><img class="int3" src="./img/i3.jpg" alt="">Câte ședințe de tratament sunt necesare?</p>
      <div class="overlay">
        <div class="rs">
          <p>Varianta scurta de raspuns:6-12 sesiuni in functie de zona.Numarul de sedinte se stabileste pentru fiecare persoana in parte,de catre specialistul terapeut,care face o consultatie atenta asupra pielii. </p>
        </div>

      </div>

      </div>
    </div>
    </div>
    <div>
    <div class="curs"><h1>Cursuri</h1></div>
    <div class="cursuri">
      <p><img style="border-radius:0 100px 100px 0;width:800px;height:300px;margin-left:0;" src="./img/ceara.jpg" alt="">Epilare  cu ceară</p>
      <p style="margin-top:100px">Epilare  cu zahăr<img style="border-radius:0 0 0 70px;width:779px;height:250px;margin-left:-60px;" src="./img/zahar.jpg" alt=""></p>
    </div>
    </div>
    <?php
   
   if  (isset($_SESSION['logged_in_user_id_1'])) {
     echo '<button class="rezerva">
     <a style="text-decoration: none; color: white;" href="appointment.php">
         Rezervă o Programare
     </a>
 </button>'; } else {
       
  echo '<button class="rezerva">
  <a style="text-decoration: none; color: white;" href="login.php">
      Rezervă o Programare
  </a>
</button>';}
   ?>
   
</main> 
  <?php
  include './components/footer.php"';
  ?> 
  <script>
    function myFunction0() {
  var y = document.getElementById("div2");
  if (y.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }
  var z = document.getElementById("div3");
  if (z.style.display === "block") {
    z.style.display = "none";
  } else {
    z.style.display = "block";
  }
  var a = document.getElementById("div4");
  if (a.style.display === "block") {
    a.style.display = "none";
  } else {
    a.style.display = "block";
  }
  var b = document.getElementById("div1");
  if (b.style.display === "block") {
    b.style.display = "none";
  } else {
    b.style.display = "block";
  }
}
function myFunction1() {
  var y = document.getElementById("div2");
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
  var z = document.getElementById("div3");
  if (z.style.display === "none") {
    z.style.display = "block";
  } else {
    z.style.display = "none";
  }
  var a = document.getElementById("div4");
  if (a.style.display === "none") {
    a.style.display = "block";
  } else {
    a.style.display = "none";
  }
  var b = document.getElementById("div1");
  if (b.style.display === "none") {
    b.style.display = "block";
  } else {
    b.style.display = "none";
  }
}
function showDiv1() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  myFunction0();
}
  
function hideDiv1() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
  myFunction1();
}
  
function showDiv2() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  myFunction0();
}
function hideDiv2() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
  myFunction1();
}
function showDiv3() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  myFunction0();
}
  
function hideDiv3() {
  var x = document.getElementById("myDIV2");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
  myFunction1();
}
function showDiv4() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  myFunction0();
}
  
function hideDiv4() {
  var x = document.getElementById("myDIV3");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
  myFunction1();
}
</script>
</body>
</html>