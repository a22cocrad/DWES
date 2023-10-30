<?php

/**
 * 
 * 
 * 
 */

include("config/config.php");
session_start();
if (!isset($_SESSION["auth"])) {
    $_SESSION["auth"] = false;
    $_SESSION["user"] = "invitado";
}
$auth = $_SESSION["auth"];
$usuario = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Autentificación Básica</h1>

    <div>
        <?php

        if ($auth) {
            echo "Bienvenido " . $_SESSION["user"];
            echo '<br><a href="cerrarsesion.php">Cerrar Sesión</a>';
        } else {
            include('include/login_form.php');
        }
        ?>
    </div>

    <nav>
        <?php
        if ($auth) {
            include('include/nav_usuario.php');
        } else {
            include('include/nav_invitado.php');
        }
        ?>
    </nav>
    <h2>Inicio</h2>
</body>

</html>
