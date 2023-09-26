<!-- Script que cargue las siguientes variables:
$x=10;
$y=7;
y muestre
10 + 7 = 17
10 - 7 = 3
10 * 7 = 70
10 / 7 = 1.4285714285714
10 % 7 = 3 -->

<?php
$x = 10;
$y = 7;
?>

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
print($x . " + " . $y . " = " . $x+$y . "<br>");
print($x . " - " . $y . " = " . $x-$y. "<br>");
print($x . " * " . $y . " = " . $x*$y. "<br>");
print($x . " / " . $y . " = " . $x/$y. "<br>");
print($x . " % " . $y .  " = " . $x%$y. "<br>");
    ?>

</body>

</html>