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
    <?php
        echo $frase;
    ?>
<form action="Ejer2.php" method="POST">
<label>Introduce el texto que deseas almacenar: </label>
<input type="text" name="usuario">
<input type="submit" value="Guardar">
<input type="submit" value="Borrar" name="borrar">
</form>
</body>
</html>