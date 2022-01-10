<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer2</h1>
<p>Crea una aplicación que simule una
calculadora. La calculadora estará
representada por un formulario con dos
campos numéricos y un desplegable
para indicar la operación que se desea
realizar (suma, resta, multiplicación o
división). La aplicación deberá mostrar el
resultado de la operación realizada y
mostrar un mensaje de error cuando se
intente dividir entre cero.</p>
<p><b>calculadora</b></p>
<form action="Ejer2.php" method="GET">
    <p>Ultimo resultado: 10</p>
    <p>Primer numero:  <input type="text" name="num1"></p>
    <p>Segundo numero: <input type="text" name="num2"></p>
    <p>Seleccione la operación deseada: <select name="operacion" id="u">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    </p>
    <input type="submit" value="Enviar">
</form>
<br><br>
<?php
    echo operar($num1,$num2,$operador);
?>
</body>
</html>