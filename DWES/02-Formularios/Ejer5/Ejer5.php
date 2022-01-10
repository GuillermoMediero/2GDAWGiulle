<?php
    $productos = array(
        "producto1" => array(
            "nombre" => "Logitech K120",
            "descripcion" => "Teclado multimedia USB plug&play, trackPoint Caps (10pk, Soft Dome)",
            "precio" => "25.99"
        ),
        "producto2" => array(
            "nombre" => "Lenovo LI5",
            "descripcion" => "El mouse Lenovo 300 compacto inalambrico es el accesorio perfecto para cualquier persona que desee un mayor control y libertad",
            "precio" => "12.99"
        ),
        "producto3" => array(
            "nombre" => "Monitor LG X10",
            "descripcion" => "LCD con retroalimentacion LED ThinkVision T1714p Sqare de 17 pulgadas",
            "precio" => "179.99" 
        ),
        "producto4" => array(
            "nombre" => "Monitor Lenovo Q24i",
            "descripcion" => "Pantalla de 60,45 cm (23,8*) Funciones como AMD FreeSync",
            "precio" => "172"
        ),
        "producto5" => array(
            "nombre" => "ThinkPad X1 Extreme",
            "descripcion" => "ThinkPad X1 Extreme de 2.ª generacion gestiona exigentes tareas informaticas sin problemas. Con pantalla tactil 4K OLED",
            "precio" => "1200"
        )
    );

$cant1 =$_POST["cantidad1"];
$cant2 =$_POST["cantidad2"];
$cant3 =$_POST["cantidad3"];
$cant4 =$_POST["cantidad4"];
$cant5 =$_POST["cantidad5"];

$prec1 = $productos["producto1"]["precio"] * $cant1;
$prec2 = $productos["producto2"]["precio"] * $cant2;
$prec3 = $productos["producto3"]["precio"] * $cant3;
$prec4 = $productos["producto4"]["precio"] * $cant4;
$prec5 = $productos["producto5"]["precio"] * $cant5;
$total = $prec1 + $prec2 + $prec3 + $prec4 + $prec5;

echo "<h1>Precio Total</h1>El importe de la compra es de $total euros <br><h1>Detalles de la compra</h1>";
$frase = "<ul>";

if(!$cant1 == 0){
    $frase .= "<li>".$productos["producto1"]["nombre"]. "($cant1)</li>";
}

if(!$cant2 == 0){
    $frase .= "<li>".$productos["producto2"]["nombre"]."($cant2)</li>";
}

if(!$cant3 == 0){
    $frase .= "<li>".$productos["producto3"]["nombre"]."($cant3)</li>";
}

if(!$cant4 == 0){
    $frase .= "<li>".$productos["producto4"]["nombre"]."($cant4)</li>";
}

if(!$cant5 == 0){
    $frase .= "<li>".$productos["producto5"]["nombre"]."($cant5)</li>";
}
$frase .= "</ul>";
echo $frase;

echo "<br><form action=\"Ejer5.view.php\"><input type=\"submit\" value=\"Volver a la tienda\"></form>"
?>
