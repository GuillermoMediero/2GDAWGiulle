<?php

namespace Ejer3\models;

class Admin extends User{

    private $admin_level;

    public function __construct($username, $nombre, $apellidos, $email ,$password , $ultimo_acceso, $admin_level)
    {
        parent::__construct($username, $nombre, $apellidos, $email ,$password , $ultimo_acceso);
        $this->admin_level = $admin_level;
    }

}

?>