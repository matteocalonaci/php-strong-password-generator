<?php

// genera un numero casuale da 0 a 10
// $provaSeleZione = rand(0,10);


$inputUtente = $_GET["inputUtente"] ?? "Null";

$xPassword ="";

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
    <title>Document</title>
</head>
<body>
    <?php 

    // ciclo for tante x quante richieste dall'utente

for ($i = 0; $i <= $inputUtente; $i++) { 
    $xPassword = $xPassword . "x";
    
}
echo "<h3> La password è : $xPassword </h3>";

// ciclo for password sicura 

for ($i=0; $i < $inputUtente; $i++){
    $selezione = rand(0,3);
    $last = strlen($caratteri[$selezione]) -1;
    $password .= $caratteri[$selezione][rand(0,$last)];
};
echo "<h3> La password sicura è : $password </h3>";



?>
</body>
</html>