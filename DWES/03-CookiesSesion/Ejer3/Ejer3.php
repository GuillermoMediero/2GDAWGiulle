<?php
        if ($_POST["idioma"] == "Castellano") {
            setcookie("idioma", $_POST["idioma"] , time() + 60);
            $idioma = $_COOKIE["idioma"];
        }
        else{
            setcookie("idioma", $_POST["idioma"] , time() + 60);
            $idioma = $_COOKIE["idioma"];
        }
    require "Ejer3.view.php"
?>