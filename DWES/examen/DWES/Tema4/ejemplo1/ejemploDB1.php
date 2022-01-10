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



//$datos = array("id" => $_GET["id"]);
//$stmt = $db->prepare("SELECT id, tarea FROM tareas WHERE id = :id");
//$stmt->execute($datos);
$stmt = $db->prepare("SELECT id, tarea FROM tareas");
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();

while($row = $stmt->fetch()) {
    echo $row['id'] . "-";
    echo $row['tarea'] . "<br>";
    // echo $row->id . "-";
    // echo $row->tarea . "<br>";
}


