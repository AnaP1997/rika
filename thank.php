<?php
if (isset($_POST["done"])) {
     $c=mysqli_connect('localhost','root','','rika');
    session_start();
    if(!$c) die();
    if (!$c) {
        die("Conexiunea la baza de date a eșuat: " . mysqli_connect_error());
    } else {
        echo "Conexiunea la baza de date a fost stabilită cu succes!";
    }
    $sql="SELECT data,ora from programari";
    $sql1="SELECT data,ora from programari_active";
    $result = $c->query($sql);
    $res = $c->query($sql1);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data1= $row["data"];
        $ora1= $row["ora"];
     if ($res->num_rows > 0) {
     while ($row = $res->fetch_assoc()) {
        $data2= $row["data"];
        $ora2= $row["ora"];
        
 
if($data1==$data2 && $ora1==$ora2){
    $sql_delete = "DELETE FROM programari_active WHERE data = '$data2' && ora='$ora2'";   }
}  }
}

        if ($c->query($sql_delete) === TRUE) {
            echo "Înregistrarea a fost ștearsă din tabelul programari.";
        } else {
            echo "Eroare la ștergere din tabelul programari: " . $c->error;
        }
}
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programare</title>
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
            max-height:800px;
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
            margin:0 0 0 600px;
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
    include './components/nav.php"';
    include './components/languageru.php"';
     ?> </div>
     <main style="margin:10px;">
    <form action="./index.php">
        <h1>Va mulțumim că ați ales Rika Esthetic!</h1>
    <button type="submit" name="deactivate" value="deactivate">Confirmati Programarea</button>
    </form>
    </main>
    <?php
  include './components/footer.php"';
  ?>
</body>
</html>
