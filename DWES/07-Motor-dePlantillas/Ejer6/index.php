<?php

require 'vendor/autoload.php';
require 'models/Zapatilla.php';
use duncan3dc\Laravel\Blade;
use ejer6\models\Zapatilla;

$zapatillas = [
    $zapatilla = new Zapatilla(1,"Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla(2,"Nike", "Messi X7 Plus", "Zapatilla de futbol", "99€"),
    $zapatilla = new Zapatilla(3,"Nike", "Air Jordan V1", "Zapatilla de baloncesto", "135€"),
    $zapatilla = new Zapatilla(4,"Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla(5,"Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla(6,"Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla(7,"Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla(8,"Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla(9,"Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla(10,"Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€")
];

if(isset($_GET["accion"])){
        switch($_GET["accion"]){
            case "detalle":
                echo Blade::render("listado", ["nombre" => "ZALANDOS", "zapatillas" => obtenerPorId($zapatillas,$_GET["id"])]);
        }
}
else{
    echo Blade::render("zapatos", ["nombre" => "ZALANDOS", "zapatillas" => $zapatillas]);
}

function obtenerPorId($zapatillas, $id){
    foreach ($zapatillas as $zapatilla){
        if($zapatilla->getId() == $id){
            return $zapatilla;
        }
    }
}

?>