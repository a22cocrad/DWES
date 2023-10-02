<?php
/**
 * Script para mostrar un portfolio basado en una plantilla.
 * @author: Adrián Cordovero Crespo
 * @date: 25/09/2023
 *
 *
 */
// Variables
$email = "a22cocrad@iesgrancapitan.org";
$phone = "611441661";
$nombre = "Adrián";
$apellido = "Cordovero";
$linkedin = "https://www.linkedin.com/feed/";
$twitter = "https://www.x.com";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Cordovero Crespo | Portfolio</title>
</head>
<body>
    <h1><?php echo $nombre, " ", $apellido ?></h1>
    <h2>PHP Developer</h2>
    <ul>
        <li>Mail: <?php echo $email ?></li>
        <li>Phone: <?php echo $phone ?></li>
        <li>Linkedin: <a href="<?php echo $linkedin ?>">Linkedin</a></li>
        <li>Twitter: <a href="<?php echo $twitter ?>">Twitter</a></li>


    </ul>
    <a href="https://github.com/a22cocrad/DWES/blob/main/Unidad_2/Actividades/Ejercicio2/index.php">GITHUB</a>
</body>
</html>