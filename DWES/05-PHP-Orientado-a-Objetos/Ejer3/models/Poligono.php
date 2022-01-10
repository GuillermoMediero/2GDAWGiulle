<?php

    namespace Ejercicio3\models;

    class Poligono {
        private $color;
        private $altura;
        private $anchura;
        function __construct($color,$altura,$anchura)
        {
            $this->color = $color;
            $this->altura = $altura;
            $this->anchura = $anchura;
        }
    }

    class Triangulo extends Poligono{

        function area(){
            return $this->altura * $this->anchura / 2;
        }

    }

    class Cuadrado extends Poligono{

        function area(){
            return $this->altura * $this->anchura;
        }
    }
?>