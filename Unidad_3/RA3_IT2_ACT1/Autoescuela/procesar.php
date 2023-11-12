
<?php
include("./config/tests_cnf.php");

if (!isset($_POST['submit'])) {
    echo "Error. Debe acceder mediante un test válido.";
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./config/style.css">
        <title>TEST - <?php echo $test_number; ?></title>
    </head>

    <body>
    <?php
    $test_number = $_POST["submit"];
    $questions = $aTests[$test_number - 1]["Preguntas"];
    $answers = $aTests[$test_number - 1]["Corrector"];
    $approved = 0;
    $route_img = "./dir_img_test" . $test_number . "/img";
    echo "<form action='inicio.php' method='post'>";

    for ($id_pregunta = 0; $id_pregunta < count($questions); $id_pregunta++) {
        echo '<div class="question">';
        echo '<h4 style="font-size: 20px;">' . ($questions[$id_pregunta]["Pregunta"])  . '</h4><br>';
        echo '<img src="' . (file_exists($route_img . ($id_pregunta + 1) . ".jpg") ? $route_img . ($id_pregunta + 1) . ".jpg" : 'dir_img_test1/notfound.jpg') . '"> <br>';
        for ($j = 0; $j < 3; $j++) {
            echo '<label>';
            if (($questions[$id_pregunta]['respuestas'][$j][0] == $answers[$id_pregunta]) && ($answers[$id_pregunta] == $_POST["respuesta" . $id_pregunta])) {
                echo '<input checked disabled type="radio" ><span class="correct">✔️' . ($questions[$id_pregunta]["respuestas"][$j]) .  '</span></input> <br>';
                $approved++;
            } elseif (($questions[$id_pregunta]['respuestas'][$j][0] == $answers[$id_pregunta]) && ($answers[$id_pregunta] != $_POST["respuesta" . $id_pregunta])) {
                echo '<input disabled type="radio" ><span class="correct">❌' . ($questions[$id_pregunta]["respuestas"][$j]) .  '</span></input> <br>';
            } elseif ($_POST["respuesta" . $id_pregunta] == $questions[$id_pregunta]['respuestas'][$j][0]) {
                echo '<input checked disabled type="radio"><span class="incorrect">❌' . ($questions[$id_pregunta]["respuestas"][$j]) .  '</span></input> <br>';
            } else {
                echo '<input  disabled type="radio"><span class="incorrect">❌' . ($questions[$id_pregunta]["respuestas"][$j]) .  '</span></input> <br>';
            }
            echo '</label>';
        }
        echo '</div>';
    }
    if ($approved >= 5) {
        echo '✔️ ¡Enhorabuena! Has aprobado.✔️ <br>';
        echo 'Número de aciertos: '. $approved;
    } else {
        echo '❌ ¡Lo siento! La próxima vez será. ❌<br>';
        echo 'Número de fallos: '. 10-$approved;
    }
    echo '<br><br><button name="submit">Volver al inicio</button>';

    echo '</form>';

    echo '<br>';
}?>


</body>

</html>

<?php

?>
