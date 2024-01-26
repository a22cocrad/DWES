<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../config/style.css">
    <title>Cuestionario</title>
</head>

<body>
    <form action="ejercicio2Validar.php" method="post">
        <label><span class="nombre">Nombre:</span>
            <div><input required type="text" name="nombre"></div>
            <?php
            include("../config/config.php");
            echo '<span class="idiomas">Idiomas: <select name="idiomas"> </span>';
            foreach ($idiomas as $value) {
                echo '<option value=' . $value . '>' . $value . '</option>';
            }
            echo '</select>';
            echo '</label>';
            foreach ($preguntas as $key => $value) {
                echo '<br>';
                echo '<span>' . $value['pregunta'] . '</span>';
                if ($value['Tipo'] == 'text') {
                    echo '<div><input required type="text" name="' . $key . '"></div>';
                } elseif ($value['Tipo'] == 'Multiple-choice') {
                    foreach ($value['Opciones'] as $opcion){
                        echo '<label>';
                        echo '<div><input required type="radio" name="'. $key. '" value="'. $opcion. '">' . $opcion . '</div>';
                        echo '</label>';
                    }
                }
            }
            ?>
            <br><button type="submit" name="submit">Corregir</button>
    </form>
</body>

</html>