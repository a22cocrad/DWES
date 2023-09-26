<!-- Escribir un script que declare una variable y muestre la siguiente información en
pantalla:
Valor actual 8.
Suma 2. Valor ahora 10.
Resta 4. Valor ahora 6.
Multipica por 5. Valor ahora 30.
Divide por 3. Valor ahora 10.
Incrementa el valor en 1. Valor ahora 11.
Decrementa el valor en 1. Valor ahora 11. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Cordovero Crespo</title>
</head>

<body>
    <h1>Adrián Cordovero Crespo</h1>
    <?php

    $variable = 8;
    echo "Valor actual: " . $variable;
    $variable = $variable + 2;
    echo "Suma 2. Valor ahora " . $variable;
    $variable = $variable - 4;
    echo "Resta 4. Valor ahora " . $variable;
    $variable = $variable * 5;
    echo "Multiplica por 5. Valor ahora " . $variable;
    $variable = $variable / 3;
    echo "Divide por 3. Valor ahora " . $variable;
    $variable = $variable + 1;
    echo "Incrementa el valor en 1. Valor ahora " . $variable;
    $variable = $variable - 1;
    echo "Decrementa el valor en 1. Valor ahora " . $variable;

    ?>

</body>

</html>