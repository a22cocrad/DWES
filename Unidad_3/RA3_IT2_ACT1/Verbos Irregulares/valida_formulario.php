<?php
session_start();


if(isset($_POST["submit"])) {

    $verbosAleatorios = $_SESSION["verbosAleatorios"];
    $contadoraciertos = 0;
    $contadorfallos = 0;

    echo'<form action="resuelto_formulario.php" method="post">';
    echo"<table border='1'>";
    for ($i = 0; $i < count($verbosAleatorios); $i++) {
        echo "<tr>";
        for ($j = 0; $j < 4; $j++) {
            if(isset($_POST[$i . '-' . $j])) {
                if($verbosAleatorios[$i][$j] == $_POST[$i . '-' . $j]) {
                echo "<td style='background-color: lightgreen;'>" . $verbosAleatorios[$i][$j] . "</td>";
                $contadoraciertos++;
                } else {
                    echo "<td style='background-color: #FF6666;'>" . $_POST[$i . '-' . $j] . "</td>";
                    $contadorfallos++;
                }
            } else {
                echo "<td style='background-color: #FFD1B3;'>" . $verbosAleatorios[$i][$j] . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table> <br>";
    echo '<button type="submit" name="submit">RESOLVER</button><br>';
    echo '</form>';
    echo"NÚMERO DE ACIERTOS: " . $contadoraciertos;
    echo"<br> NÚMERO DE FALLOS: " . $contadorfallos;
    echo"<br> PORCENTAJE DE ACIERTOS: " . ($contadoraciertos / ($contadoraciertos + $contadorfallos)) * 100 . "%";

    




} else {
    echo 'Error. Primero debe rellenar los datos. <a href="./">VOLVER';
}
?>