<?php
    $usuarios = [
        "user1" => [
            "nombre" => "Nora",
            "password" => "123123",
            "email" => "nora@php.net"
        ],
        "user2" => [
            "nombre" => "Jaime",
            "password" => "1231234",
            "email" => "jaime@php.net"
        ],
        "user3" => [
            "nombre" => "Aitor",
            "password" => "12312345",
            "email" => "nora@php.net"
        ],
    ];

    $nombre = $_GET["nombre"];
    $con = $_GET["con"];

    if($nombre == $usuarios["user1"]["nombre"] && $con == $usuarios["user1"]["password"]){
        $frase = "Usuario y contraseña correctos";
    }
    elseif($nombre == $usuarios["user2"]["nombre"] && $con == $usuarios["user2"]["password"]){
        $frase = "Usuario y contraseña correctos";
    }
    elseif($nombre == $usuarios["user3"]["nombre"] && $con == $usuarios["user3"]["password"]){
        $frase = "Usuario y contraseña correctos";
    }
    else{
        $frase = "Usuario y contraseña incorrectos";
    }

    require "Ejer17.view.php";
?>