<?php
    $estudiantes = [
        [
            "nombre" => "Luis Scola",
            "nota1"  => 9,
            "nota2" => 8,

        ],
        [
            "nombre" => "Pablo Prigioni",
            "nota1"  => 8,
            "nota2" => 4,

        ],
        [
            "nombre" => "Sergi Vidal",
            "nota1"  => 7,
            "nota2" => 6,

        ],
        [
            "nombre" => "Ramon Rivas",
            "nota1"  => 3.5,
            "nota2" => 6,

        ]
    ]; 

    foreach($estudiantes as $key => $value){
        $frase = "<table>
        <tr>
            <td>Nombre</td>
            <td>Nota 1</td>
            <td>Nota 2</td>
            <td>Nota media</td>
        </tr>
        <tr>
            <td>$value</td>
            <td>$value</td>
            <td>$value</td>
            <td>$value</td>
        </tr>
        <tr>
            <td>$value</td>
            <td>$value</td>
            <td>$value</td>
            <td>$value</td>
        </tr>
        <tr>
            <td>$value</td>
            <td>$value</td>
            <td>$value</td>
            <td>$value</td>
        </tr>
        <tr>
            <td>$value</td>
            <td>$value</td>
            <td>$value</td>
            <td>$value</td>
        </tr>
        </table>";
    }

    if($value <5){

    };
    require "Ejer32.view.php";
?>