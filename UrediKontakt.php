<?php

include ("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi kontakt</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>

<?php

$veza = OtvoriVezu();

$sql = "SELECT * FROM kontakti WHERE Id =" . $_GET["id"];

//echo $sql;

$result = $veza->query($sql);

if($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    $id = $row["Id"];
    $ime = $row["Ime"];
    $prezime = $row["Prezime"];
    $adresa = $row["Adresa"];
    $telefon = $row["Telefon"];
    $email = $row["Email"];
    $webstranica = $row["Webstranica"];
} else {
    echo "Nema podataka";
}

?>

<h1>Uredi podatke za <?php echo $ime . " " . $prezime ?> </h1> 

<form action="SpremiIzmjenu.php" method="POST">

    Ime: <br> <input type="text" name="ime" value="<?php echo $ime; ?>"> <br>
    <br> Prezime:<br> <input type="text" name="prezime" value="<?php echo $prezime; ?>"> <br>
    <br> Adresa: <br> <input type="text" name="adresa" value="<?php echo $adresa; ?>"> <br>
    <br> Telefon: <br> <input type="text" name="telefon" value="<?php echo $telefon; ?>"> <br>
    <br> Email : <br> <input type="text" name="email" value="<?php echo $email; ?>"><br>
    <br> Web Stanica: <br> <input type="text" name="webstranica" value="<?php echo $webstranica; ?>"> <br>
   
    <input type="hidden" name="id" value="<?php echo $id;?>">
    
    <br> <button type="submit">Spremi izmjenu</button>



</form>
    
</body>
</html>