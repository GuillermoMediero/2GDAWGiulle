<?php

require "models/Persona.php";

use Ejercicio5\models\Persona;

$pers1 = new Persona();
$pers2 = new Persona();
$pers3 = new Persona();
$pers4 = new Persona();
$pers5 = new Persona();

echo "Total de personas en el Mundo es de " . Persona::$personasEnElMundo
?>