<?php
    class Publicacion{
        private $autores;
        private $ano;
        private $editorial;
        private $titulo;
        private $texto;

       public function __construct($autores, $ano, $editorial, $titulo, $texto)
        {
            $this->autores = $autores;
            $this->ano = $ano;
            $this->editorial = $editorial;
            $this->titulo = $titulo;
            $this->texto = $texto;
        }

        function leer(){
            return $this->texto;
        }

        function escribir($texto){
            $this->texto = $this->texto." ".$texto;
        }
    }
?>