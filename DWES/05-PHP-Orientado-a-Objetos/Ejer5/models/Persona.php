<?php

namespace Ejercicio5\models;

class Persona{
    public static $personasEnElMundo = 0;

    public function __construct(){
        self::$personasEnElMundo++;
    }
}

?>