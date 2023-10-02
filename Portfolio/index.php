<?php
/**
 * Script para mostrar un portfolio basado en una plantilla.
 * @author: Adrián Cordovero Crespo
 * @date: 25/09/2023
 *
 *
 */

// Cargamos fichero de configuración
include 'config/config.php';
// Cargamos contenido de variables.
$name = $datos['nombre'];
$apellido = $datos['apellidos'];
$email = $datos['email'];
$phone = $datos['telefono'];
$photo = $datos['foto'];
$catprof = $datos['catprofesional'];
$linkedin = $datos['redes_sociales']['linkedin'];
$twitter = $datos['redes_sociales']['twitter'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrián Cordovero Crespo | Portfolio</title>
</head>
<body>
    <h1><?php echo $name, " ", $apellido , " | Portfolio" ?></h1>
    <h2><?php echo $catprof ?></h2>
    <ul>
        <li>Mail: <?php echo $email ?></li>
        <li>Phone: <?php echo $phone ?></li>
        <li>Linkedin: <a href="<?php echo $linkedin ?>">Linkedin</a></li>
        <li>Twitter: <a href="<?php echo $twitter ?>">Twitter</a></li>


    </ul>
</body>
</html>
