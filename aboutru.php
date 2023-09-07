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
    include './components/navru.php"';
    include './components/language.php"';
     ?> </div>
     <br>
     <br>
     <main>
     <h1 style="width:900px;margin-left:350px;"> В эстетической клинике Rika ваше время лечения будет расслабляющим и приятным с момента вашего приезда. Мы настолько уверены в результатах нашей процедуры лазерной эпиляции, что даже предлагаем гарантию цены.</h1>
<div class="about">
    <div><p>Эстетическая клиника Rika является одной из самых важных клиник лазерной эпиляции в Кишиневе, предлагающей самое современное лечение по самым конкурентоспособным ценам. Быстрая, эффективная и безболезненная лазерная эпиляция – наша специализация, и наши результаты говорят сами за себя. Наши инвестиции в титановый лазер Alma Soprano гарантируют нашим клиентам наиболее эффективную лазерную эпиляцию. 100% безопасный и безболезненный титановый лазер Alma Soprano означает, что вам больше не нужно бояться эпиляции.</p>
<p>Процедура антицеллюлитного массажа обладает особой эффективностью, поскольку способствует существенному уменьшению жирового слоя и устранению целлюлита Клиника Rika Esthetic предлагает Вам антицеллюлитный массаж на самых эффективных и современных аппаратах, а также лучшие массажные услуги в исполнении наших специалистов!</p>
<p>Получите результаты, похожие на операцию, без боли, без времени на восстановление, без непомерных затрат! Кроме того, пока жировые клетки естественным образом выводятся из организма, кожа подтягивается и тонизируется в обработанной области! Похудейте именно там, где вы хотите, с помощью вакуумного антицеллюлитного массажа. </p>
<p>Приглашаем вас записаться на прием, чтобы увидеть замечательные результаты на собственной коже!</p></div>
<img style="height:400px;width:600px;margin-top:80px;margin-left:5px;" src="./img/about.jpg" alt="">
</div>
</main> 
  <?php
  include './components/footer.php"';
  ?> 
</body>
</html>