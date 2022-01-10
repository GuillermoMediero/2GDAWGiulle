<?php

namespace Ejer2\models;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

class Paciente {

    private $nombre;
    private $apellidos;
    private $edad;
    private $log;

    public function __construct($nombre,$apellidos,$edad)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->log = new Logger('name');
        $this->log->pushHandler(new StreamHandler('app.log', Logger::DEBUG));
        $this->log->pushHandler(new FirePHPHandler());
    }

    public function enfermar(){
        $this->log->info('Paciente enfermo');
    }

    public function curar(){
        $this->log->info('Paciente curado');
    }
}

?>