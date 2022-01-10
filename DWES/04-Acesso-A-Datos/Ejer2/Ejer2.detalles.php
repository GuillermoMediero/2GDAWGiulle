<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            padding: 1em;
            border-bottom: 1px solid gray;
        }
    </style>
</head>
<body>
    <h2>Detalles de nuestro empleado</h2>
    <table>
        <?php verDetalles($id, $dbh) ?>
    </table><br>
    <a href="Ejer2.php">Volver</a>
</body>
</html>