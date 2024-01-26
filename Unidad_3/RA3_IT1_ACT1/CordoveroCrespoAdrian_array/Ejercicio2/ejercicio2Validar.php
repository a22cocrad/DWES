<?php
if (!isset($_POST['submit'])) {
    echo 'No se ha enviado el formulario';
} else {
    function formatearRespuesta($respuesta)
    {
        if (is_array($respuesta)) {
            $respuesta = implode(", ", $respuesta);
        }
        return $respuesta;
    }
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../config/style.css">
        <title>Cuestionario</title>
    </head>

    <body>

        <?php
        include("../config/config.php");
        $nombre = $_POST["nombre"];
        $idiomas = $_POST["idiomas"];
        echo '<span>Nombre: ' . $nombre . '</span>';
        echo '<span>Idiomas: ' . $idiomas . '</span>';
        foreach ($preguntas as $key => $value) {
            echo '<br>';
            $respuesta = formatearRespuesta($value['Respuesta']);
            echo '<span>' . str_replace(".....", $respuesta, $value['pregunta']) . '</span>';
            if ($value['Tipo'] == 'text') {
                if (str_contains($respuesta, $_POST[$key])) {
                echo '<div><input disabled type="text" placeholder="' . $_POST[$key] . '">✔️</div>';
                } else {
                echo '<div><input disabled type="text" placeholder="' . $_POST[$key] . '">❌</div>';
                }
            } elseif ($value['Tipo'] == 'Multiple-choice') {
                foreach ($value['Opciones'] as $opcion) {
                    if (($_POST[$key] == $opcion) && ($opcion == $respuesta)) {
                        echo '<div class="acierto"><input checked disabled type="radio">' . $opcion . '✔️</div>';
                    } elseif (($_POST[$key] == $opcion) && ($opcion != $respuesta)) {
                        echo '<div class="fallo"><input checked disabled type="radio">' . $opcion . '❌</div>';
                    } elseif (($_POST[$key] != $opcion) && ($opcion == $respuesta)) {
                        echo '<div class="acierto"><input disabled type="radio">' . $opcion . '❌</div>';
                    } else {
                        echo '<div class="fallo"><input disabled type="radio">' . $opcion . '❌</div>';
                    }
                }
            }
        }
        ?>

    </body>

    </html>
<?php
}
?>