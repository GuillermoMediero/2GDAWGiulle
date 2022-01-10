<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer1</h1>
    <p>Lista de la compra: crea una aplicación que muestre una
lista de la compra almacenada en base de datos. La tabla de
base de datos únicamente tendrá dos columnas, una con el
ID y otra un VARCHAR con el texto (será el nombre del
elemento a comprar).
● Añade a la aplicación anterior un formulario para
introducir nuevos productos en la lista.
● Añade a la aplicación anterior un enlace a cada producto
de la lista para que se pueda eliminar de la lista.</p>
<br>
<p><b>Lista de compra</b></p>
<ul>
    <?php
        anadirLista($dbh);
    ?> 
</ul>
<br>

<p><b>Añadir elemento</b></p>
<form action="Ejer1.php" method="GET">
        <input type="text" name="nombre">
        <input type="submit" value="Añadir" name="accion">
</form><br>
<a href="Ejer1.php?accion=eliminarTodo">Vaciar lista</a>
</body>
</html>