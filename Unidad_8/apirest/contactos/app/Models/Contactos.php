<?php


public function __clone()
{
    trigger_error("La clonación no está permitida.", E_USER_ERROR);
}


public function set($sh_data=array())
{
    foreach ($sh_data as $campo=>$valor) {
        $$campo = $valor;
    }
    $this->query = "INSERT INTO contactos(nombre,telefono,email)
                    VALUES(:nombre,:telefono,:email)";
    $this->parametros["nombre"]= $nombre;
    $this->parametros["telefono"]=$telefono;
    $this->parametros["email"]=$email;
    $this->getResultsFromQuery();
    $this->mensaje = "SH añadido";
}