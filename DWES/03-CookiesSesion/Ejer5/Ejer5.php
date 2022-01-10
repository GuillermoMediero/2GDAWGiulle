<?php
    $usuarios= array(
        "user1" => array(
            "nombre" => "Ane",
            "apellido" => "Loizu",
            "contrasena" => "123Abc"
        ),
        "user2" => array(
            "nombre" => "Igor",
            "apellido" => "Martinez",
            "contrasena" => "Abc123"
        ),
        "user3" => array(
            "nombre" => "Edur",
            "apellidos" => "Landa",
            "contrasena" => "1A2b3c"
        )
        );
        session_start();
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        if(!array_key_exists($usuario, $usuarios)) {
            $frase = "Usuario no existe";
        } elseif ($contrasena != $usuarios[$usuario]["contrasena"]){
            $frase = "Contrasena incorrecta";
        }
        else{
            $_SESSION["usuario"] = $usuario;
            header("Location: Ejer5.sesion.php");
        }

        require "Ejer5.view.php"
?>