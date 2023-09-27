<?php
$c =mysqli_connect('localhost','root','','rika');
session_start();
$c2 = mysqli_connect('localhost', 'root', '', 'rikaprivate');

// Verifică conexiunea la a doua bază de date
if (!$c2) {
    die("Eroare la conectarea la a doua bază de date: " . mysqli_connect_error());
}
$sql1 = "SELECT * FROM specialisti";
$res = $c2->query($sql1);

$name = array();
$specialisti = array();


if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $name[] = $row["nume"];
        $specialisti[] = $row;}}
        function esteAdministrator($username, $specialisti) {
    foreach ($specialisti as $row) {
        if ($row['nume'] === $username && $row['functia'] === 'Administrator') {
            return true;
        }
    }
    return false;
}
$sql="SELECT * FROM programari";
$result = mysqli_query($c, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $button_name = "done_" . $row["id_prog"];
    if (isset($_POST[$button_name])) {

        $id_prog = $_POST["id"];
        $specialist = $_POST["specialist"];
        $observatii = $_POST["obs"];
        $idd =crc32(uniqid()); 
    $sql_insert_istoric = "INSERT INTO istoric_clienti (id_client,nume,telefon,procedura, data, observatii,specialist)
                          SELECT '$idd',nume,telefon, serviciu, data, '$observatii','$specialist'
                          FROM programari
                          WHERE id_prog = '$id_prog'";

    
    if ($c->query($sql_insert_istoric) === TRUE) {
        echo "Datele au fost inserate cu succes în tabelul istoric_clienti.";

        
        $sql_delete = "DELETE FROM programari WHERE id_prog = '$id_prog'";
        if ($c->query($sql_delete) === TRUE) {
            echo "Înregistrarea a fost ștearsă din tabelul programari.";
        } else {
            echo "Eroare la ștergere din tabelul programari: " . $c->error;
        }
    } else {
        echo "Eroare la inserarea datelor în tabelul de istoric: " . $c->error;
    }

}
}}
mysqli_close($c2);

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
.antet{
    position: fixed;
    width: 100%;
}
h3{
    margin:30px 50px 20px 50px;
}
input{

    margin:90px 40px 40px 40px;
height:40px;
width:160px;
}
button{
    margin:90px 40px 40px 40px;
    height:40px;
    width:40px;
}
select{
    margin-top:90px;
    width:50px;
    height:20px;
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
   <nav style="font-family:Arial;font-size:18px; margin:30px; padding:10px; ">
    

    <div   class="links">
            <a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./rikaprivate.php">Programări</a>
            <a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./search_info.php">Informații Clienți</a>
            <?php
   
   if (isset($_SESSION['logged_in_user_id'])) {
    
    $logged_in_user_id = $_SESSION['logged_in_user_id'];

    
    if (esteAdministrator($logged_in_user_id, $specialisti)) {
       
        echo '<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./activate.php">Activează Programări</a>';
        echo '<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./addnews.php">Adaugă noutăți</a>';
        echo '<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 20px; " href="./register1.php">Adaugă specialist</a>';
    }

 
    echo '<a style="text-decoration: none; color:#4A4E69;margin:0 20px 0 300px; " href="./logout1.php">Ieșire</a>';
}?>
        
    </nav>
</header>  
<main>
    <div class="antet" style="display:flex;flex-direction:row;background-color:#E7D8C9;opacity:60%;height:80px;">
        <h3 style="margin-left:70px;">Nume</h3>
        <h3 style="margin-left:120px;">Telefon</h3>
        <h3 style="margin-left:130px;">Serviciu</h3>
        <h3 style="margin-left:80px;">Specialist</h3>
        <h3 style="margin-left:100px;">Data</h3>
        <h3 style="margin-left:60px;">Ora</h3>
        <h3 style="margin-left:100px;">Observații</h3>
    </div>
    <form action="./rikaprivate.php" method="post">
    <div style="display:flex;flex-direction:column;">
        <?php
        $result = mysqli_query($c, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div style="display:flex;flex-direction:row;height:100px;margin:0 0 20px 0;">
                    <h4 style="margin-top:90px;flex: 1.5; text-align: center;"><?php echo $row['nume']; ?></h4>
                    <h4 style="margin-top:90px;flex: 2; text-align: center;"><?php echo $row['telefon']; ?></h4>
                    <h4 style="margin-top:90px;flex: 2; text-align: center;"><?php echo $row['serviciu']; ?></h4>
                    <select name="specialist" id="specialist">
            <?php
        foreach ($name as $n) {
            echo "<option value='" . $n . "'>" . $n . "</option>";
        }
        
        ?>
            </select>
                    <h4 style="word-spacing: 80px;margin-top:90px;flex: 3; text-align: center;"><?php echo $row['data']; ?></h4>
                    <input id="obs" name="obs" type="text">
                    <input type='hidden' name='id' value="<?php echo $row["id_prog"]; ?>">
                    <button type="submit" name="done_<?php echo $row["id_prog"]; ?>" value="done">✔</button>
                </div>
        <?php
          
}
        }
     ?></form>
    </div>
</main>

<footer style="background-color:#E7D8C9;opacity:60%;height:80px;">
        <p style="padding-top:40px;text-align:center;font-size:20px;">&copy;2023 Rika Esthetic </p>
    </footer> 
</body>
</html>