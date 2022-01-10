<?php
    if (array_key_exists("usuario", $_POST)) {
        setcookie("usuario", $usuarios);
        $frase = "El ultimo valor de usuario es " .$_COOKIE["usuario"];
    }
    else{
        $frase = "No hay ningun usuario almacenado";
    }
    
    require "Ejer1.view.php"
?>