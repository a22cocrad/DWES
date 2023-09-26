<!-- Escribir un script que utilizando variables permita obtener el siguiente resultado:
Valor es string.
Valor es double.
Valor es boolean.
Valor es integer.
Valor is NULL. -->

<?php
echo "Adrián Cordovero Crespo";
$var1 = "Hola";
$var2 = 12345678901234567890;
$var3 = True;
$var4 = 2;
$var5 = null;

?>
<br>
<?php

echo "Valor es " . gettype($var1);
?>
<br>
<?php
echo "Valor es " . gettype($var2);
?>
<br>
<?php
echo "Valor es " . gettype($var3);
?>
<br>
<?php
echo "Valor es " . gettype($var4);
?>
<br>
<?php
echo "Valor es " . gettype($var5);
?>