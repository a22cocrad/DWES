<link rel="stylesheet" href="./config/style.css">

<?php
session_start();
include("./config/verbos.php");
include("./config/funciones.php");


if(isset($_POST["submit"])) {

    $cantidadDeVerbos = $_POST["numerodeverbos"];
    $dificultad = $_POST["dificultad"];
    
    if(!isset($_SESSION["verbosAleatorios"]) && !isset($_SESSION["huecosAleatorios"]) ) {
    $verbosAleatorios = obtenerValoresAleatorios($listaVerbosOriginal, $cantidadDeVerbos);
    foreach ($verbosAleatorios as $verbo) {
        $huecosAleatorios[] = obtenerValoresAleatorios($verbo, $dificultad);
    }
    $_SESSION["verbosAleatorios"] = $verbosAleatorios;
    $_SESSION["huecosAleatorios"] = $huecosAleatorios;
} else {
    $verbosAleatorios = $_SESSION["verbosAleatorios"];
    $huecosAleatorios = $_SESSION["huecosAleatorios"];
}

    echo'<form action="valida_formulario.php" method="post">';
    echo"<table border=1>";
    for ($i = 0; $i < count($verbosAleatorios); $i++) {
        echo "<tr>";
        $contador = 0;
        for ($j = 0; $j < 4; $j++) {
            if(in_array($verbosAleatorios[$i][$j], $huecosAleatorios[$i]) && $contador < $dificultad) {
                $contador++;
                echo '<td><input type="text" name="' . $i . '-' . $j . '" required> </td>';
            } else {
                echo "<td style='background-color: lightgrey;'>" . $verbosAleatorios[$i][$j] . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    echo '<button type="submit" name="submit">Enviar</button>';
    echo '</form>';

} else {
    echo 'Error. Primero debe rellenar los datos. <a href="./">VOLVER';
}
?>
