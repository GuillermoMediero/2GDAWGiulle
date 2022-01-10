<?php

require 'vendor/autoload.php';
require 'models/Zapatilla.php';
use duncan3dc\Laravel\Blade;
use ejer2\models\Zapatilla;

$zapatilla = new Zapatilla("Adidas", "MARQUEE BOOST", "Zapatilla de baloncesto", "140€");
echo Blade::render("zapatos", ["zapatilla" => $zapatilla]);

?>