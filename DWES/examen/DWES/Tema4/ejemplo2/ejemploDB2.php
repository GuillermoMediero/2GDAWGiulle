<?php

$dbname = "ejemplo1";
$host = "localhost";
$user = "root";
$pass = "";

function connect($host, $dbname, $user, $pass){
    try {
        # MySQL
        $db= new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $db;
    }
    catch(PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

$db = connect($host, $dbname, $user, $pass);

/* Sentencia sin PARAMETROS*/
$stmt = $db->prepare("SELECT id, tarea FROM tareas");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();

while($row = $stmt->fetch()) {
    //echo $row['id'] . "-";
    //echo $row['tarea'] . "<br>";
    echo "$row->id -------- $row->tarea <br>";
}


/* Sentencia con PARAMETROS*/

/* $datos = array("id" => $_GET["id"]);
$stmt = $db->prepare("SELECT id, tarea FROM tareas WHERE id = :id");
$stmt->execute($datos);

while($row = $stmt->fetch()) {
    echo $row['id'] . "-";
    echo $row['tarea'] . "<br>";
} */


/* Abrebiación con QUERY */

/*
$stmt = $db->query("SELECT id, tarea FROM tareas");

while($row = $stmt->fetch()) {
    //echo $row['id'] . "-";
    //echo $row['tarea'] . "<br>";
}
*/

/* Ejemplo con fetchObject() */

/* while($row = $stmt->fetchObject()) {
    //echo $row['id'] . "-";
    //echo $row['tarea'] . "<br>";
    echo "$row->id --- $row->tarea <br>";
} */


/* Ejemplo con fetchObject() */


// $resultado contendrá un array asociativo con todos los datos
$stmt = $db->prepare("SELECT id, tarea FROM tareas");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_OBJ);


// Para leer las filas podemos recorrer el array y acceder a la información.
foreach ($resultado as $row){
   // echo $row["id"]." ///// ".$row["tarea"]."<br>";
   echo $row->id." ///// ".$row->tarea."<br>";
}




