<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../config/style.css">
    <title>Horario</title>
</head>

<body>
    <form action="ejercicio1Horario.php" method="post">
        <label>
            Horario:
            <select name="horario">
                <?php
                include("../config/config.php");
                foreach ($horarios as $key => $value) {
                    echo '"<option value=' . $key . '>' . $value["grupo"] . '</option>"';
                }
                echo '</select> <br>';
                echo '<button name="submit" value="submit">➤</button>';
                echo '</form>';
                ?>
        </label>
</body>
</html>
