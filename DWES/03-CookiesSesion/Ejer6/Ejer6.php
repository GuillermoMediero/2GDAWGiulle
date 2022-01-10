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

        foreach($usuarios as $key => $value){
            if ($usuarios["user1"] == $_POST["usuario"] && $usuarios["user1"]["contrasena"] == $_POST["contrasena"]) {
                $frase = "Todo correcto";
            }
            else{
                $frase = "Usuario incorrecto";
            }
        }

        require "Ejer5.view.php"
?>