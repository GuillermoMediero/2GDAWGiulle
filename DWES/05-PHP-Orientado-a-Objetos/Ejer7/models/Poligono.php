<?php

    namespace Ejercicio7\models;

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

?>