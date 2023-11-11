
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
    $route_img = "./dir_img_test" . $test_number . "/img";
    echo "<form action='inicio.php' method='post'>";

    for ($id_pregunta = 0; $id_pregunta < count($questions); $id_pregunta++) {
        echo '<div class="question">';
        echo '<h4 style="font-size: 20px;">' . ($questions[$id_pregunta]["Pregunta"])  . '</h4><br>';
        echo '<img src="' . (file_exists($route_img . ($id_pregunta + 1) . ".jpg") ? $route_img . ($id_pregunta + 1) . ".jpg" : 'dir_img_test1/notfound.jpg') . '"> <br>';
        for ($j = 0; $j < 3; $j++) {
            echo '<label>';
            
            if ($_POST["respuesta" . $id_pregunta] == $questions[$id_pregunta]["respuestas"][$j][0] && $_POST["respuesta" . $id_pregunta] == $answers[$id_pregunta]) {
                echo '<input checked type="radio" ><span class="correct">' . ($questions[$id_pregunta]["respuestas"][$j]) .  '</span></input> <br>';
            } else {
                if ($_POST["respuesta" . $id_pregunta] == $questions[$id_pregunta]["respuestas"][$j][0] && $_POST["respuesta" . $id_pregunta] != $answers[$id_pregunta]) {
                    echo '<input  checked type="radio" ><span class="incorrect">' . ($questions[$id_pregunta]["respuestas"][$j]) .  '</span></input> <br>';
                } else {
                    echo '<input  disabled type="radio"><span class="incorrect">' . ($questions[$id_pregunta]["respuestas"][$j]) .  '</span></input> <br>';
                }
            }
            echo '</label>';
        }
        echo '</div>';
    }
    echo '<button name="submit">Volver al inicio</button>';

    echo '</form>';

    echo '<br>';
}?>


</body>

</html>

<?php

?>
