<?php
  $c=mysqli_connect('localhost','root','','rika');
    session_start();
    if (!isset($_SESSION['logged_in_user_id'])) {
        
    } else {
        $id = $_SESSION['logged_in_user_id'];

        $sql = "SELECT * FROM users WHERE id = '$id'";

        $result = mysqli_query($c,$sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $logged_in_user_name = $row['nume']; 
            $sql1 = "SELECT * FROM programari WHERE nume='" . $row['nume'] . "'";
            $result = mysqli_query($c, $sql1);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $button_name = "delete_" . $row["id_prog"];
                if (isset($_POST[$button_name])) {
                    $id_prog = $_POST['id'];
                    $sql_delete = "DELETE FROM programari WHERE id_prog = '$id_prog'";
                    if ($c->query($sql_delete) === TRUE) {
                        //echo "Înregistrarea a fost ștearsă din tabelul programari.";
                    } else {
                        //echo "Eroare la ștergere din tabelul programari: " . $c->error;
                    }
                } 
            
            }
            }}
            
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

button{
    width:40px;
    height:40px;
    margin:40px 40px 40px 60px;
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
   
    if  (isset($_SESSION['logged_in_user_id'])) {

      echo '<h1 style="margin:38px 0 0 40px;color:#d4a373;font-size:20px;">' . $logged_in_user_name . '</h1>';
        
        echo '<a style="text-decoration: none;color:black;margin:38px 0 0 70px;font-size:18px;" href="./logout.php">Ieșire</a>';
    } else {
        
        echo '<a style="text-decoration: none;color:black;margin-left:100px;margin-top:40px;font-size:18px;" href="./login.php">Login</a>';
    }
    ?>
    </header>  
<main>
    <div class="antet" style="display:flex;flex-direction:row;background-color:#E7D8C9;opacity:60%;height:80px;">
        <h3 style="margin-left:240px;">Serviciu</h3>
        <h3 style="margin-left:380px;">Data</h3>
        <h3 style="margin-left:120px;">Ora</h3>
        <h3 style="margin-left:540px;width:100px;">Anulează Programarea</h3>
    </div>
    <form action="./myprog.php" method="post">
    <div style="display:flex;flex-direction:column;">
        <?php
        $result = mysqli_query($c, $sql1);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div style="display:flex;flex-direction:row;height:100px;margin:0 0 20px 0;">
                    <h4 style="flex:1;margin:60px 20px 0 200px ; text-align: center;"><?php echo $row['serviciu']; ?></h4>
                    <h4 style="flex:7;word-spacing: 80px;margin:60px 80px 0 -80px;text-align: center;"><?php echo $row['data']; ?></h4>
                    <input type='hidden' name='id' value="<?php echo $row["id_prog"]; ?>">
                    <button type="submit"onclick="confirmDelete('<?php echo $row['id_prog']; ?>')" name="delete_<?php echo $row["id_prog"]; ?>" value="delete">❌</button>
                </div>
        <?php
          
}
        }
     ?></form>
    </div>
</main>
<footer style="background-color:#E7D8C9;opacity:60%;margin-top:280px;">
<div style=" margin-left:200px;display:flex;flex-direction:row;" >
        <p style="margin:30px 0 0 0;font-size:20px;">&copy;2023 Rika Esthetic </p>
        <img style="margin:8px 300px 8px 380px;height:60px; width:60px;border-radius:30px;" src="./components/riika.jpg" alt="">
<div>
        
<a href="https://www.facebook.com/epilareculaserdiodaALMA"><img style="margin:8px 10px 8px 10px;height:60px; width:60px;border-radius:30px;" src="./components/facebook.png" alt=""></a>
<a href="https://www.instagram.com/rika_esthetic/?igshid=MzRlODBiNWFlZA%3D%3D"><img style="margin:8px 10px 8px 10px;height:60px; width:60px;border-radius:30px;" src="./components/instagram.png" alt=""></a>   
<a href="tel:+37369267015"><img style="margin:8px 10px 8px 10px;height:60px; width:60px;border-radius:30px;" src="./components/phone.png" alt=""></a>
</div>
</div>
    </footer>
    <script>
function confirmDelete(id_prog) {
   
    var confirmResult = confirm("Sunteți sigur că doriți să ștergeți această programare?");

  
    if (confirmResult) {
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "./myprog.php");

        
        var input = document.createElement("input");
        input.setAttribute("type", "hidden");
        input.setAttribute("name", "id_prog");
        input.setAttribute("value", id_prog);

       
        form.appendChild(input);


        document.body.appendChild(form);
        form.submit();
    }
}
</script>

</body>
</html>