<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brisanje kontakta</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

<div class="container">

<h1>Brisanje kontakta</h1>

<?php

    $id = $_GET ["id"];

    $veza = OtvoriVezu();

    $sql = "DELETE FROM kontakti WHERE Id = $id";

    if($veza->query($sql) === TRUE) {
        echo "<p>Kontakt je uspješno izbrisan iz baze.</p>";
    } else {
        echo "<p>Greška: $veza->error</p>";
    }

    $veza->close();


?>

</div>

    
</body>
</html>