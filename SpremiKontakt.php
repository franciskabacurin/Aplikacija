<?php

include("OtvoriVezu.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Spremi Kontakt</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    
<div class="container">

    <h1> Podaci: </h1>

    <?php
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $adresa = $_POST["adresa"];
        $telefon = $_POST["telefon"];
        $email = $_POST ["email"];
        $webstranica = $_POST ["webstranica"];


        echo "<p>$ime</p>";
        echo "<p>$prezime</p>";
        echo "<p>$adresa</p>";
        echo "<p>$telefon</p>";
        echo "<p>$email</p>";
        echo "<p>$webstranica</p>";
    

    // Spremanje podataka
    /*
    $myfile = fopen ("datoteka.txt", "a") or die ("Nije moguće otvoriti datoteku");
    $txt = "$ime, $prezime, $adresa, $telefon, $grad\n, $spol\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    */


     // Spremanje u bazu podataka
     $veza = OtvoriVezu();

     $sql = "INSERT INTO kontakti (Ime, Prezime, Adresa, Telefon, Email, Webstranica) VALUES('$ime', '$prezime', '$adresa', '$telefon', '$email', '$webstranica')";

     if($veza->query($sql) === TRUE) {
        echo "<p> Zapis je uspješno spremljen. </p>";
     }else {
        echo "Greška: " .$veza->error;
     }
    
     $veza -> close();

    ?>

</div>

</body>
</html>