<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejer3</h1>
    <p>Crea un programa que muestre un nombre de usuario enviado en la URL:
:
</p>
    <?php
        $usuario = $_GET["usuario"];

        $resultado = "Bienvenido, $usuario";
        
        echo $resultado;
    ?>
</body>
</html>