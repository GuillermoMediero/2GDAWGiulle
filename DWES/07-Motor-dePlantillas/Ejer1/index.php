<?php

require 'vendor/autoload.php';
use duncan3dc\Laravel\Blade;

$nombre = "Guille";
echo Blade::render("bienvenido", ["nombre" => $nombre]);

?>