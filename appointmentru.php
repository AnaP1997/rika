<?php
     $c=mysqli_connect('localhost','root','','rika');
    session_start();
    if(!$c) die();
    /*if (!$c) {
        die("Conexiunea la baza de date a eșuat: " . mysqli_connect_error());
    } else {
        echo "Conexiunea la baza de date a fost stabilită cu succes!";
    }*/
    if (isset($_POST["program"])) {
        $nume = FILTER_INPUT(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $prenume = FILTER_INPUT(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
        $telefon = FILTER_INPUT(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
        $procedura = FILTER_INPUT(INPUT_POST, 'serviciu', FILTER_SANITIZE_SPECIAL_CHARS);
        $data = FILTER_INPUT(INPUT_POST, 'data', FILTER_SANITIZE_SPECIAL_CHARS);
        $ora = FILTER_INPUT(INPUT_POST, 'ora', FILTER_SANITIZE_SPECIAL_CHARS);

        if (strlen($nume) < 2) {
            $nameError = "Nume prea scurt";
        }

        if (strlen($prenume) < 2) {
            $surnameError = "Prenume prea scurt";
        }
        if (strlen($telefon) < 8) {
            $phoneError = "Telefon prea scurt";
        }


        if (!isset($nameError) && !isset($surnameError) && !isset($phoneError)) {
            $id = bin2hex(random_bytes(16));
        
            $sql = "INSERT INTO programari(id_prog,nume,prenume,telefon,serviciu,data,ora)
                    VALUES('$id', '$nume','$prenume', '$telefon','$procedura','$data','$ora')";

            if (mysqli_query($c,$sql)) {
                $successMessage = "Успешное Запись ";
            } else {
                $errorMessage = "Что-то пошло не так, попробуйте еще раз";
                echo mysqli_error($c);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programare Salon de Frumusețe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .header{
        margin-left:100px;
    padding: 10px;
    display: flex;

    }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        select, input[type="text"], input[type="date"], input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="header">
    <?php
    include './components/logo.php"';
    include './components/navru.php"';
    include './components/language.php"';
     ?> </div>
     <main style="margin:10px;">
    <div class="container">
        <h1>Rika Esthetic</h1>

        <form action="./appointment.php" method="post" style="padding:30px;margin:0 0 20px 0;">

        <label for="name">Имя:</label>
        <input id="name" name="name" type="text">

        <label for="name">Фамилия:</label>
        <input id="surname" name="surname" type="text">

        <label for="phone">Телефон:</label>
        <input id="phone" name="phone" type="text">

            <label for="serviciu">Выберите услугу:</label>
            <select id="serviciu" name="serviciu">
                <option value="Epilare cu laser">Лазерная эпиляция</option>
                <option value="Remodelare corporală">Ремоделирование тела</option>
                <option value="Laminare gene/sprâncene">Ламинирование ресниц/бровей</option>
                <option value="Depilare cu ceară">Восковая депиляция</option>
            </select>

            <label for="data">Дата:</label>
            <input type="date" id="data" name="data" required>

            <label for="ora">Желаемое время:</label>
            <input type="time" id="ora" name="ora" required>

            <button type="submit" name="program" value="program">Записаться</button>
            <p style="color: white; margin-left:40px;"><?php if(isset($successMessage)) echo $successMessage; ?></p>
        <p style="color: red"><?php if(isset($errorMessage)) echo $errorMessage; ?></p>
    
        </form>
    </div>
    </main>
    <?php
  include './components/footer.php"';
  ?>
</body>
</html>
