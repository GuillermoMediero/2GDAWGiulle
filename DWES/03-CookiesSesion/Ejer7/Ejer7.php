<?php
    session_start();

    mostrarCesta();

    if(isset($_GET["accion"])) {
        $accion = $_GET["accion"];
        realizarAccion($accion);
    }

    if(isset($_SESSION["listaCesta"])) {
        $productosComprados = $_SESSION["listaCesta"];
        $precioTotal = calcularPrecioTotal($productosComprados, $productos);
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
        }
    }
    require "Ejer7.datos.php";

    require "Ejer7.view.php";



?>