<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    if ($_POST["cerrar"]) {
       unset($_SESSION["usuario"]);
       session_unset();
       session_destroy();
    }

    ?>
<form action="Ejer5.php" method="POST">
    <h4>Bienvenido <?=$_SESSION["usuario"]?></h4>
    <input type="submit" value="cerrar sesion" name="cerrar">
</form>
</body>
</html>