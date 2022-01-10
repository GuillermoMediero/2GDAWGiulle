<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Detalles del producto</h2>
    <table>
        <tr>
            <td>ID</td>
            <td><?= $id?></td>
        </tr>
        <tr>
            <td>NOMBRE</td>
            <td><?= $nombre?></td>
        </tr>
        <tr>
            <td>DESCRIPCION</td>
            <td><?= $descripcion?></td>
        </tr>
        <tr>
            <td>PRECIO</td>
            <td><?= $precio?></td>
        </tr>
    </table>
    <p><a href="ejercicio9.php">Volver a la tienda</a></p>
</body>
</html>