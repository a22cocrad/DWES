<?php
function obtenerValoresAleatorios($array, $cantidad) {
        $clavesAleatorias = array_rand($array, $cantidad);
        $valoresAleatorios = array();
    
        if (is_array($clavesAleatorias)) {
            foreach ($clavesAleatorias as $clave) {
                $valoresAleatorios[] = $array[$clave];
            }
        } else {
            $valoresAleatorios[] = $array[$clavesAleatorias];
        }
    
        return $valoresAleatorios;
    }
    
    ?>