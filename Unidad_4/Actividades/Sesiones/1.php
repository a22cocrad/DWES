<?php
/**
 * @author Adrián Cordovero Crespo
 */

 // iniciamos sesión
 session_start();

if (!isset($_SESSION['count'])){
    $_SESSION['count']=0;
}

// incrementar su valor
$_SESSION['count']++;

$contador = $_SESSION['count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista</title>
</head>
<body>
    <h1>Contador</h1>
    <h2><?php echo $contador?></h2>
</body>
</html>