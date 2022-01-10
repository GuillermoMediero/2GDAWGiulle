<?php

require "Poligono.php";

namespace Ejercicio7\models;

class Cuadrado extends Poligono{
    function area(){
        if ($this->altura < 0 || $this->anchura < 0) {
            throw new \Exception("No pueden tener valores negativos");
        }
        else{
            return $this->altura * $this->anchura;
        }
    }
}

?>