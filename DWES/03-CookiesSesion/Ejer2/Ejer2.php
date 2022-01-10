<?php
    if (isset($_POST["usuario"])) {
        setcookie("usuario", $_POST["usuario"]);
        $frase = "El ultimo valor de usuario es " .$_COOKIE["usuario"];
    }
    else{
        $frase = "No hay ningun usuario almacenado";
    };

    if ($_POST["borrar"]) {
        setcookie("usuario", null);
    };

    require "Ejer2.view.php"
?>