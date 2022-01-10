<?php

require 'vendor/autoload.php';
require 'models/Zapatilla.php';
use duncan3dc\Laravel\Blade;
use ejer4\models\Zapatilla;

$zapatillas = [
    $zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla("Nike", "Messi X7 Plus", "Zapatilla de futbol", "99€"),
    $zapatilla = new Zapatilla("Nike", "Air Jordan V1", "Zapatilla de baloncesto", "135€"),
    $zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€"),
    $zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€")
];


echo Blade::render("zapatos", ["nombre" => "ZALANDOS", "zapatillas" => $zapatillas]);

?>