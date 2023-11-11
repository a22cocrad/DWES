<?php
include("./config/tests_cnf.php");

// $test_exist: Almacena el numero de test que hay en tests_cnf.php
foreach ($aTests as $key => $value) {
    $test_exists[] = $value['idTest'];
}
// Comprobamos que el formulario ha sido enviado correctamente.
$test_number = "";
foreach ($_POST as $key => $value) {
    $test_number = $key;
}
if (!isset($_POST[$test_number])) {
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
        $questions = $aTests[$test_number - 1]["Preguntas"];
        $route_img = "./dir_img_test" . $test_number . "/img";
        echo "<form action='procesar.php' method='post'>";

        for ($id_pregunta = 0; $id_pregunta < count($questions); $id_pregunta++) {
            echo '<div class="question">';
            echo '<h4 style="font-size: 20px;">' . ($questions[$id_pregunta]["Pregunta"])  . '</h4><br>';
            echo '<img src="' . (file_exists($route_img . ($id_pregunta + 1) . ".jpg") ? $route_img . ($id_pregunta + 1) . ".jpg" : 'dir_img_test1/notfound.jpg') . '"> <br>';
            for ($j = 0; $j < 3; $j++) {
                echo '<label>';
                echo '<input required type="radio" name="respuesta' . $id_pregunta . '" value="' . ($questions[$id_pregunta]["respuestas"][$j][0]) . '">' . ($questions[$id_pregunta]["respuestas"][$j]) .  '</input> <br>';
                echo '</label>';
            }
            echo '<br>';
            echo '</div>';
        }
        echo '<button name="submit" value="' . $test_number . '">Finalizar test</button>';
        echo '</form>';
        echo '<br>';



        ?>


    </body>

    </html>

<?php
}
?>