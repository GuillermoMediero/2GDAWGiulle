<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            float: right;
        }
        td{
            padding: 1em;
            border-bottom: 1px solid gray;
        }
    </style>
</head>
<body>
    <h1>Ejer2</h1>
<p>Crea una aplicación para el mantenimiento de empleados de la empresa. La
aplicación deberá tener las siguientes opciones: <br>
● Mostrar todos los empleados en una tabla. <br>
● Insertar un empleado. <br>
● Eliminar un empleado. <br>
● Mostrar detalle de un empleado (abrirá una página aparte).</p>

<h1>App de Gestion de Empleados</h1>


<form action="Ejer2.php" method="GET">
    <h3>Añadir nuevo empleado</h3>
    <input type="text" name="nombre" placeholder="Nombre"><br><br>
    <input type="text" name="apellidos" placeholder="Apellidos"><br><br>
    <input type="text" name="edad" placeholder="Edad"><br><br>
    <input type="text" name="fecha" value="01/01/2000"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="text" name="dni" placeholder="DNI"><br><br>
    <select name="sexo">
        <option value="hombre">Hombre</option>
        <option value="mujer">Mujer</option>
    </select><br><br>
    <textarea name="curriculum" cols="30" rows="3" placeholder="Curriculum"></textarea><br><br>
    <input type="submit" value="Añadir" name="accion">
</form>

<h3>Listado de empleados</h3>
<table>
    <tr>
        <td>DNI</td>
        <td>Nombre</td>
        <td>Apellidos</td>
        <td>Opciones</td>
    </tr>
    <?= rellenarTabla($dbh)?>
</table>
<p>*Opcion secreta: <a href="Ejer2.php?accion=eliminarTodo">Vaciar lista</a></p>
</body>
</html>