<?php
    require "basedatos.php";

    $host = "localhost" ;
    $dbname = "ListaCompra";
    $user = "root";
    $pass = "";

    $dbh = connect($host,$dbname,$user,$pass);

    if (isset($_GET["accion"])) {
        $accion = $_GET["accion"];
        realizarAccion($accion, $dbh);
    }

    function anadirLista($dbh){
        $stmt = $dbh->prepare("SELECT * FROM lista");
        $stmt->setFetchMode(PDO::FETCH_OBJ);
        $stmt->execute();

        while($row = $stmt->fetch()) {
            echo "<li>" . $row->nombre . " (<a href=\"Ejer1.php?accion=eliminar&id=".$row->id."\">eliminar</a>)";
        } 
    }

    function añadirElemento($elemento, $dbh){
        $stmt = $dbh->prepare("INSERT INTO lista(nombre) values (:nombre)");
        $stmt->execute($elemento);
    }

    function eliminarElemento($id, $dbh){
        $stmt = $dbh->prepare("DELETE FROM lista WHERE id = (:id)");
        $stmt->execute($id);
    }

    function eliminarTodo($dbh){
        $stmt = $dbh->prepare("DELETE FROM lista");
        $stmt->execute();
    }

    function realizarAccion($accion, $dbh){
        switch ($accion) {
            case "Añadir":
                if(isset($_GET["nombre"])) {
                    $elemento = $_GET["nombre"];
                    añadirElemento(["nombre" => $elemento], $dbh);
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
        }
    }
    require "Ejer1.view.php"
?>