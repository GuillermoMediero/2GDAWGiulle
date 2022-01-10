<?php
    session_start();

    comprobarIdioma();

    mostrarCesta();

    if(isset($_GET["accion"])) {
        $accion = $_GET["accion"];
        realizarAccion($accion);
    }

    if(isset($_SESSION["listaCesta"])) {
        $productosComprados = $_SESSION["listaCesta"];
        $precioTotal = calcularPrecioTotal($productosComprados, $productos);
    }

    function comprobarIdioma(){
        if ($_GET["idioma"] == "Castellano") {
            setcookie("idioma", "Bienvenido" , time() + 60);
            $bienvenido = $_COOKIE["idioma"];
            return $bienvenido;
        }
        elseif($_GET["idioma"] == "Euskera"){
            setcookie("idioma", "Ongietorri" , time() + 60);
            $bienvenido = $_COOKIE["idioma"];
            return $bienvenido;
        }
        else{
            $bienvenido = "";
            return $bienvenido;
        }
    }

    function mostrarCesta(){
        if (!isset($_SESSION["listaCesta"])) {
            $_SESSION["listaCesta"] = array();
        }
    }

    function calcularPrecioTotal($productosComprados, $productos){
        $precioTotal = 0;
        foreach ($productosComprados as $id) {
            $precioTotal += $productos[$id]['precio'];
        }
        return $precioTotal;
    }

    function realizarAccion($accion){
        switch ($accion) {
            case "comprar":
                if(isset($_GET["id"])) {
                    $idProducto = $_GET["id"];
                    array_push($_SESSION["listaCesta"], $idProducto);
                }
                break;
            case "borrar":
                unset($_SESSION["listaCesta"]);
                break;
            case "detalles":
                $id = $_GET["id"]; 
                require_once "Ejer9.datos.php";
                $nombre = $productos[$id]["nombre"];
                $descripcion = $productos[$id]["nombre"];
                $precio = $productos[$id]["nombre"];
                require "Ejer9.detalles.php";
                die();
        }
    }
    require "Ejer8.datos.php";

    require "Ejer8.view.php";



?>