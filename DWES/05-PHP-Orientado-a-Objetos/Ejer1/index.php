<?php
    include "publicacion.php";

    $publi1 = new Publicacion("Mario",2004,"Los manos","La cigueña","Erase una vez una cigueña");

    echo $publi1->leer();
    $publi1->escribir("Que vivia en una montaña");
    echo $publi1->leer();
?>