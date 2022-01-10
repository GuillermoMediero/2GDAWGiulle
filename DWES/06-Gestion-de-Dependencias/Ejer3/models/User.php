<?php

namespace Ejer3\models;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

abstract class User {
    protected $username, $nombre, $apellidos, $email ,$password , $ultimo_acceso;

    protected $log;

    function __construct($username, $nombre, $apellidos, $email ,$password , $ultimo_acceso)
    {
        $this->username = $username;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->ultimo_acceso = $ultimo_acceso;
        $this->log = new Logger('name');
        $this->log->pushHandler(new StreamHandler('app.log', Logger::DEBUG));
        $this->log->pushHandler(new FirePHPHandler());
    }

    public abstract function showActions();

    public function login(){
        $this->log->info('Ejecutando el metodo login() por el usuario'. $this->username);
    }

    public function logout(){
        $this->log->info('Ejecutando el metodo login() por el usuario'. $this->username);
    }


    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */
    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos($apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of ultimo_acceso
     */
    public function getUltimoAcceso()
    {
        return $this->ultimo_acceso;
    }

    /**
     * Set the value of ultimo_acceso
     */
    public function setUltimoAcceso($ultimo_acceso): self
    {
        $this->ultimo_acceso = $ultimo_acceso;

        return $this;
    }
}

?>