<?php
    require "basedatos.php";

    $host = "localhost" ;
    $dbname = "ListaEmpleados";
    $user = "root";
    $pass = "";

    $dbh = connect($host,$dbname,$user,$pass);

    if (isset($_GET["accion"])) {
        $accion = $_GET["accion"];
        realizarAccion($accion, $dbh);
    }

    function rellenarTabla($dbh){
        $stmt = $dbh->prepare("SELECT id,dni,nombre,apellidos  FROM empleados");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();

        while($row = $stmt->fetch()) {
            echo "<tr><td>".$row->dni."</td><td>". $row->nombre."</td><td>". $row->apellidos. "</td><td><a href=\"Ejer2.php?accion=detalles&id=".$row->id."\">Ver detalles</a>|<a href=\"Ejer2.php?accion=eliminar&id=".$row->id."\">Eliminar</a></td></tr>";
        }
    }

    function añadirElemento($datos, $dbh){
        $stmt = $dbh->prepare("INSERT INTO empleados(nombre,apellidos,edad,fecha,email,dni,sexo,curriculum) values (:nombre,:apellidos,:edad,:fecha,:email,:dni,:sexo,:curriculum)");
        $stmt->execute($datos);
    }

    function eliminarElemento($id, $dbh){
        $stmt = $dbh->prepare("DELETE FROM empleados WHERE id = (:id)");
        $stmt->execute($id);
    }

    function eliminarTodo($dbh){
        $stmt = $dbh->prepare("DELETE FROM empleados");
        $stmt->execute();
    }

    function verDetalles($id, $dbh){
        $stmt = $dbh->prepare("SELECT id,dni,nombre,apellidos,edad,fecha,email,dni,sexo,curriculum  FROM empleados WHERE id = (:id)");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute($id);

        while($row = $stmt->fetch()) {
            echo "<tr><td>Nombre:</td><td>".$row->nombre."</td></tr><tr><td>Apellidos:</td><td>".$row->apellidos."</td></tr><tr><td>Edad:</td><td>".$row->edad."</td></tr><tr><td>Fecha:</td><td>".$row->fecha."</td></tr><tr><td>Email:</td><td>".$row->email."</td></tr><tr><td>DNI:</td><td>".$row->dni."</td></tr><tr><td>Sexo:</td><td>".$row->sexo."</td></tr><tr><td>Curriculum:</td><td>".$row->curriculum."</td></tr>";
        }  
    } 

    function realizarAccion($accion, $dbh){
        $nombre = $_GET["nombre"];
        $apellidos= $_GET["apellidos"];
        $edad = $_GET["edad"];
        $fecha = $_GET["fecha"];
        $email = $_GET["email"];
        $dni = $_GET["dni"];
        $sexo = $_GET["sexo"];
        $curriculum = $_GET["curriculum"];
        switch ($accion) {
            case "Añadir":
                if(isset($nombre,$apellidos,$edad,$fecha,$email,$dni,$sexo,$curriculum)) {
                    añadirElemento(["nombre" => $nombre, "apellidos" => $apellidos, "edad" => $edad , "fecha" => $fecha, "email" => $email, "dni" => $dni, "sexo" => $sexo, "curriculum" => $curriculum], $dbh);
                }
                break;
            case "eliminar":
                if(isset($_GET["id"])) {
                    $id = $_GET["id"];
                    eliminarElemento(["id" => $id], $dbh);
                }
                break;
            case "eliminarTodo":{
                if (isset($_GET["accion"])) {
                   eliminarTodo($dbh);
                }
                break;
            }
            case "detalles":{
                if (isset($_GET["id"])) {
                    $id = $_GET["id"];
                    verDetalles(["id" => $id], $dbh);
                    require "Ejer3.detalles.php";
                    die();
                }
                break;
            }  
            default:{
                return "No se elegio nada";
            }
        }
    }
    require "Ejer3.view.php"
?>