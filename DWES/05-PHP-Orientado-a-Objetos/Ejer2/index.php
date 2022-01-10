<?php
    require_once "models/publicacion.php";
    use Ejercicio2\models\Publicacion;

    $publi1 = new Publicacion("Mario",2004,"Los manos","La cigueña","Erase una vez una cigueña");

    echo $publi1->leer()."<br>";
    $publi1->escribir("Que vivia en una montaña");
    echo $publi1->leer();
?>