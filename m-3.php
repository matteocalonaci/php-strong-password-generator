<?php
include __DIR__ . "/functions.php";
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
    "&%?!",
    // --> 4
    ];
    
    
   

    
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
<form action="m-3.php" method="GET">    
    <input type="number" placeholder="Scrivi la tua password" name="inputUtente">
    <button type="select">INVIA</button>
</form>
<h3>La password sicura è : </h3>
<?php echo getPassword($caratteri, $inputUtente, $password);
?>

</body>
</html>