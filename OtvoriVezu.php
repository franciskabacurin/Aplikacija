<?php

function OtvoriVezu() {

    // podaci za spajanje

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adresar";  // database name
   
    // kreiraj vezu
    $conn = new mysqli($servername, $username, $password, $dbname); // connection
    $conn -> set_charset("utf8");


    // provjera veze
    if($conn->connect_error) {
        die("Greška: " . $conn->connect_error);
    }
    echo "<!-- Uspješno spojen na bazu -->";


    return $conn;

}


?>





