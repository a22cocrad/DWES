<?php

/**
 * @author: Adrián Cordovero Crespo
 * DNI: 31882067L
 */


$passwords = ['array', 'for', 'while', 'foreach', 'if', 'function', 'echo', 'switch'];
$suma = 0;

function obtenerPassword($dni)
{
    global $suma, $passwords;
    for ($i = 0; $i < strlen($dni) - 1; $i++) {
        $suma += $dni[$i];
    }
    $suma %= 7;
    return $passwords[$suma];
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Adrián Cordovero Crespo">
    <title>Obtener password</title>
</head>

<body>
    <form action="#" method="post">
        <?php
        if (isset($_POST['submit'])) {
            $dni = $_POST['dni'];
            echo "Su contraseña es: " . obtenerPassword($dni);
        } else {
            echo '<label>Introduce tu DNI</label>
            <input type="text" name="dni">
            <input type="submit" value="Enviar" name="submit">';
        }
        ?>
    </form>
</body>

</html>