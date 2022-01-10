<?php

require "vendor/autoload.php";
require "models/Paciente.php";

use Ejer2\models\Paciente;

echo "<a href='index.php?accion=curar'>Curar Paciente</a><br>";
echo "<a href='index.php?accion=enfermo'>Paciente enfermo</a>";

if(isset($_GET["accion"]))
{
    $accion = $_GET["accion"];
    realizarAccion($accion);
}


function realizarAccion($accion){
    $pac1 = new Paciente("Mario","Castaña",20);
    switch($accion){
        case "curar":
            $pac1->curar();
            break;
        case "enfermo":
            $pac1->enfermar();
            break;
    }
}


?>