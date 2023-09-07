<?php
if (isset($_POST["done"])) {
    $conn =mysqli_connect('localhost','root','','rika');

    if ($conn->connect_error) {
        die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
    }

    $id_prog = $_POST["id"];

$observatii = $_POST["obs"];
$idd=uniqid();
    
    $sql_insert_istoric = "INSERT INTO istoric_clienti (id_client,nume, prenume, telefon,procedura, data, observatii)
                          SELECT '$idd',nume, prenume, telefon, serviciu, data, '$observatii'
                          FROM programari
                          WHERE id_prog = '$id_prog'";

    
    if ($conn->query($sql_insert_istoric) === TRUE) {
        echo "Datele au fost inserate cu succes în tabelul istoric_clienti.";

        
        $sql_delete = "DELETE FROM programari WHERE id_prog = '$id_prog'";
        if ($conn->query($sql_delete) === TRUE) {
            echo "Înregistrarea a fost ștearsă din tabelul programari.";
        } else {
            echo "Eroare la ștergere din tabelul programari: " . $conn->error;
        }
    } else {
        echo "Eroare la inserarea datelor în tabelul de istoric: " . $conn->error;
    }
    header("Location: ./rikaprivate.php");
    $conn->close();
}
?>
