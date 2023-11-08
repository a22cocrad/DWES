<?php

/**
 * @author: Adrián Cordovero Crespo
 * 
 * • Array de configuración con todos los verbos. 
 * 
 * • Formulario configuración que permita seleccionar número de verbos y 
 *   número de preguntas por verbo. Incluye un input tipo text y una lista desplegable.
 * 
 * • Formulario de entrada según los datos recogidos en el formulario de
 *   configuración y mostrado conjuntamente.
 * 
 * • Validación del formulario mostrando el porcentaje de aciertos y marcando de
 *   manera diferenciada los aciertos de los fallos.
 * 
 * • Opción que permita mostrar todas las respuestas.
 * 
 * • Aplicar estilos y criterios de usabilidad.
 * 
 */



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./config/style.css">
    <title>Adrián Cordovero Crespo</title>
</head>

<body>
    <form action="procesa_formulario.php" method="post">
        <label>
            Número de verbos:
            <input type="text" name="numerodeverbos" placeholder="Número de verbos" value="" required> <br> <br>
        </label>
        <label>
            Dificultad:
            <select name="dificultad">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select> <br> <br>
        </label>
        <button type="submit" name="submit">Comenzar</button>

    </form>
</body>

</html>