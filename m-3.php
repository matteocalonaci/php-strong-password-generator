<?php
include 'functions.php';
// genera un numero casuale da 0 a 10
// $provaSeleZione = rand(0,10);


$inputUtente = $_GET["inputUtente"] ?? "Null";


$caratteri = [
    "abcdefghijklmnopqrstuvwxyz", 
    // --> 26 
    "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
    // --> 26 
    "0123456789",
    // --> 10
    "&%?!"
    // --> 4
    ];
    
    //  calcola la lunghezza della stringa
    // $ultimoElemnto = strlen($caratteri[1]) -1;
    // echo $ultimoElemnto;

    
$password = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>
<body>
<form action="indexx.php">    <input type="number" placeholder="Scrivi la tua password" name="inputUtente">
    <button type="select">INVIA</button>
</form>


    
</body>
</html>