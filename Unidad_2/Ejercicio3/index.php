<!-- Script que, a partir del radio almacenado en una variable y la definición de la
constante PI, calcule el área del círculo y la longitud de la circunferencia. El debe
mostrar valor de radio, longitud de la circunferencia, área del círculo y dibujará un
círculo utilizando gráficos vectoriales. -->


<?php

$radio = 5;
const PI = 3.14159;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Adrian Cordovero Crespo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <h1>Adrián Cordovero Crespo</h1>

    <?php
    echo "Radio: ", $radio, ".";
    echo "Área del circulo: ", PI * $radio * $radio, ".";
    echo "Longitud del circulo: ", PI * 2 * $radio, ".";
    ?>
<a href="https://github.com/a22cocrad/DWES/blob/main/Unidad_2/Actividades/Ejercicio3/index.php">GITHUB</a>
</body>

</html>