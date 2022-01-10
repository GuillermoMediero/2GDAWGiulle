<?php
    $usuarios = array(
        "user1" => array(
            "nombre" => "Ane",
            "apellidos" => "Lopez",
            "password" => "123Abc"
        ),
        "user2" => array(
            "nombre" => "Amaia",
            "apellidos" => "Otsoa",
            "password" => "456Xyz"
        )
    );

    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    function comprobarUsuario($usuarios,$usuario,$contrasena){
        foreach($usuarios["user1"] as $key => $value){
            if ($value == $usuario && $value == $contrasena) {
               return "Usuario y contraseña correcto, bienvenido " .$usuarios["user1"][$key]. " " .$usuarios["user1"][$key];
            }
        }
        foreach($usuarios["user2"] as $key => $value){
            if ($value == $usuario && $value == $contrasena) {
               return "Usuario y contraseña correcto, bienvenido " .$usuarios["user2"][$key]. " " .$usuarios["user2"][$key];
            }
        }
        return "Usuario o contraseña incorrecto";
    }

    require "Ejer4.view.php";
?>