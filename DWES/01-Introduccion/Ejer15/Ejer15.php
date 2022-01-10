<?php
    $diccionario = array(
        "Usuario1" => array(
            "nombre" => "Antonio",
            "apellido" => "Mediero",
            "gmail" => "antonio@gmail.com"
        ),
        "Usuario2" => array(
            "nombre" => "Guillermo",
            "apellido" => "Mediero",
            "gmail" => "guillermo@gmail.com"
        ),
        "Usuario3" => array(
            "nombre" => "Javier",
            "apellido" => "Mediero",
            "gmail" => "javier@gmail.com"
        ),
        "Usuario4" => array(
            "nombre" => "Maria",
            "apellido" => "Mediero",
            "gmail" => "maria@gmail.com"
        ),
    );

    $nombre = $diccionario["Usuario2"]["nombre"];

    function getDatos($diccionario,$nombre){
        $nombre;
        $gmail = $diccionario["Usuario2"]["gmail"];
    }


    require "Ejer15.view.php"
?>