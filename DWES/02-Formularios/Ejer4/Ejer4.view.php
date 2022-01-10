<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejer4</h1>
<p>Crea una pantalla de login con dos campos:
usuario y contraseña. El programa deberá
validar los datos de acceso contra un diccionario
de datos como el de la imagen. El programa
deberá mostrar un mensaje de bienvenida con
su nombre y apellidos en caso de que los datos
sean correctos.
También indicará si el usuario introducido no
existe o si la contraseña introducida es
incorrecta.
</p>
<form action="Ejer4.php" method="POST">
    <h2>Login de Cuenta</h2>
    <p>Usuario</p>
    <input type="text" name="usuario">
    <p>Contraseña</p>
    <input type="password" name="contrasena"><br><br>
    <input type="submit" value="Entrar">
</form><br><br>
<?php
    echo comprobarUsuario($usuarios,$usuario,$contrasena);
?>
</body>
</html>