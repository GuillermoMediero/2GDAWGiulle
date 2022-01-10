<?php

    namespace Ejercicio4\models;

    abstract class Poligono {
        private $color;
        private $altura;
        private $anchura;
        public function __construct($color,$altura,$anchura)
        {
            $this->color = $color;
            $this->altura = $altura;
            $this->anchura = $anchura;
        }

        abstract public function area();
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