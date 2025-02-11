<?php

include ("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Spremi Izmjenu </title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    
    <div class="container">

    <h1> Spremi Izmjenu </h1>

    <?php 

        $Id = $_POST["id"];
        $Ime = $_POST["ime"];
        $Prezime = $_POST["prezime"];
        $Adresa = $_POST["adresa"];
        $Telefon = $_POST["telefon"];
        $Email = $_POST ["email"];
        $Webstranica = $_POST ["webstranica"];

        $veza = OtvoriVezu();

        $sql="UPDATE kontakti SET Ime='$Ime', Prezime='$Prezime', Adresa='$Adresa', Telefon='$Telefon', Email='$Email', Webstranica='$Webstranica' WHERE Id=$Id";

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