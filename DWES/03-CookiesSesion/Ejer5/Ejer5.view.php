<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer5</h1>
<form action="Ejer5.php" method="POST">
<h3>Inicio de sesion</h3>
<p>Usuario</p>
<input type="text" name="usuario">
<p>Contraseña</p>
<input type="password" name="contrasena"><br><br>
<input type="submit" value="Entrar">
<?= $frase?>
</form>
</body>
</html>