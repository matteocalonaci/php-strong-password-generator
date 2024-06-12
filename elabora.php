<?php

// genera un numero casuale da 0 a 10
// $provaSeleZione = rand(0,10);
//  calcola la lunghezza della stringa
// $ultimoElemnto = strlen($caratteri[1]);


$inputUtente = $_GET["inputUtente"] ?? "Null";

$xPassword ="";

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

for ($i = 0; $i <= $inputUtente - 1; $i++) { 
    $xPassword = $xPassword . "x";
    
}
echo "<h3> la password è : $xPassword </h3>";





?>
</body>
</html>