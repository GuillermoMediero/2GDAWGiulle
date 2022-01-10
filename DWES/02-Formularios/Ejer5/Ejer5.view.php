<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        td{
            padding: 0.5em 1em;
            border-bottom: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Catalogo de productos</h1><hr>
    <form action="Ejer5.php" method="POST">
    <table>
        <tr>
            <td><b>Nombre</b></td>
            <td><b>Descripcion</b></td>
            <td><b>Precio</b></td>
            <td><b>Cantidad</b></td>
        </tr>
        <tr>
            <td>Logitech K120</td>
            <td>Teclado multimedia USB plug&play, trackPoint Caps (10pk, Soft Dome)</td>
            <td>25.99</td> 
            <td><input type="text" value="0" name="cantidad1"></td>
        </tr>
        <tr>
            <td>Lenovo LI5</td>
            <td>El mouse Lenovo 300 compacto inalambrico es el accesorio perfecto para cualquier persona que desee un mayor control y libertad</td>
            <td>12.99</td> 
            <td><input type="text" value="0" name="cantidad2"></td>
        </tr>
        <tr>
            <td>Monitor LG X10</td>
            <td>LCD con retroalimentacion LED ThinkVision T1714p Sqare de 17 pulgadas</td>
            <td>179.99</td> 
            <td><input type="text" value="0" name="cantidad3"></td>
        </tr>
        <tr>
            <td>Monitor Lenovo Q24i</td>
            <td>Pantalla de 60,45 cm (23,8*) Funciones como AMD FreeSync</td>
            <td>172</td> 
            <td><input type="text" value="0" name="cantidad4"></td>
        </tr>
        <tr>
            <td>ThinkPad X1 Extreme</td>
            <td>ThinkPad X1 Extreme de 2.ª generacion gestiona exigentes tareas informaticas sin problemas. Con pantalla tactil 4K OLED</td>
            <td>1200</td> 
            <td><input type="text" value="0" name="cantidad5"></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Comprar">
    </form>
</body>
</html>