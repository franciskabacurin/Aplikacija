<?php

include ("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregled kontakta</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="container">

    <h1>Pregled kontakta:</h1>

    <table border="1"   >
        <thead>
            <tr>
                <td><b>Ime</b></td>
                <td><b>Prezime</b></td>
                <td><b>Adresa</b></td>
                <td><b>Telefon</b></td>
                <td><b>Email</b></td>
                <td><b>Web Stranica</b> </td>
                <td><b>Brisanje</b></td>
                <td><b>Uredi</b></td>
            </tr>
        </thead>
        <tbody>
    

    <?php
 
    // spajanje na bazu
    $veza = OtvoriVezu();

    //SQL upit
    $sql = "SELECT * FROM kontakti";

    $result = $veza->query($sql);

    if($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {

            $id = $row["Id"];
            $ime = $row["Ime"];
            $prezime = $row["Prezime"];
            $adresa = $row["Adresa"];
            $telefon = $row["Telefon"];
            $email = $row["Email"];
            $webstranica = $row["Webstranica"];

            echo "<tr>";
            echo "<td> $ime </td>";
            echo "<td> $prezime </td>";
            echo "<td> $adresa </td>";
            echo "<td> $telefon </td>";
            echo "<td> $email </td>";
            echo "<td> $webstranica </td>";
            echo "<td> <a href='ObrisiKontakt.php?id=$id'>Obriši</a> </td>";
            echo "<td> <a href='UrediKontakt.php?id=$id'>Uredi</a> </td>";
            echo "</tr>";

        }

    }


    ?>

        </tbody>

</table>


    </div>
</body>
</html>