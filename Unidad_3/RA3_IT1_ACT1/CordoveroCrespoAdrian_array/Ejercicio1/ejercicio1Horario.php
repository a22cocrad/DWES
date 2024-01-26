<?php
function obtenerAsignatura($hora, $dia)
{
    global $horarioSeleccionado;
    $horas = ['1ª', '2ª', '3ª', '4ª', '5ª', '6ª'];
    $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];
    $horaBuscar = $horas[$hora];
    $diaBuscar = $dias[$dia];
    $encontrado = false;

    while (!$encontrado) {
        foreach ($horarioSeleccionado['horario'] as $key => $value) {
            foreach ($value['horas'] as $key1 => $value1) {
                if ($value1['Hora'] == $horaBuscar && $value1['Dia'] == $diaBuscar) {
                    $asignatura = $key;
                    $encontrado = true;
                }
            }
        }
    }
    return $asignatura;
}


if (!isset($_POST['submit'])) {
    echo 'PRIMERO DEBE ENVIAR EL FORMULARIO';
} else {
    include("../config/config.php");
    $horarioSeleccionado = $horarios[$_POST['horario']];
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>' . $horarioSeleccionado['grupo'] . '</th>';
    echo '<th>Lunes</th> <th>Martes</th> <th>Miercoles</th> <th>Jueves</th> <th>Viernes</th> </tr>';
    for ($hora = 0; $hora < 6; $hora++) {
        echo '<tr>';
        echo '<td align="center">' . $hora + 1 . 'ª</td>';
        for ($dia = 0; $dia < 5; $dia++) {
            $asignatura = obtenerAsignatura($hora, $dia);
            echo '<td>' . $asignatura . '<br>' . $horarioSeleccionado['horario'][$asignatura]['nombre'] . 
            '<br>' . $horarioSeleccionado['horario'][$asignatura]['profesor'] . '</td>';
        }
    }
}
