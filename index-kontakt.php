<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP aplikacija </title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="container">

<h1> Unos kontakta </h1>

<form action="SpremiKontakt.php" method="POST">

    Ime: <br> <input type="text" name="ime"> <br>
    <br> Prezime:<br> <input type="text" name="prezime"> <br>
    <br> Adresa: <br> <input type="text" name="adresa"> <br>
    <br> Telefon: <br> <input type="text" name="telefon"> <br>
    <br> Email : <br> <input type="text" name="email"> <br>
    <br> Web Stanica: <br> <input type="text" name="webstranica"> <br>
   
    
<!--
 <br> Grad: <br> <select id="grad" name="grad"> 
  <option value="zagreb">Zagreb</option>
  <option value="novska">Novska</option>
  <option value="rijeka">Rijeka</option>
  <option value="krk">Krk</option>
</select> <br>

<br> Spol: <br> <input type="radio" name="spol">
<label for="zensko">Žensko</label> <br>
<input type="radio" name="spol">
<label for="musko">Muško</label> <br>
<br> Prijatelj: <br> <input type="checkbox" name="prijatelj"> <br>
-->

    <br> <button type="submit">Pošalji</button>

    



</form>

</div>

</body>
</html>