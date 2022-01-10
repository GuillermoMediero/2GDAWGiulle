<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table{
            width: 100%;
        }
        td{
            padding: 0.5em 1em;
            border-bottom: 1px solid black;
        }
        a{
            text-decoration: none;
            color: blue;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h2>Cesta de la ropa</h2>   
    <?php
    if(isset($productosComprados)) {
    ?>
        <ul>
    <?php
        foreach ($productosComprados as $id) {
            ?>
            <li><?= $productos[$id]['nombre'] ?></li>
            <?php
        }
    ?>
        </ul>
    <p>Precio total: <?= $precioTotal ?></p>
    <a href='Ejer7.php?accion=borrar'>Comprar</a>
    <?php
    } else {
    ?>
        <p>La cesta está vacía</p>
    <?php
    }
    ?>
    <h1>Catalogo de productos</h1><hr>
<?php 
foreach ($productos as $id => $producto) {
        ?>
    <form action="Ejer7.php" method="GET">
    <table>
        <thead>
        <tr>
            <td><b>Nombre</b></td>
            <td><b>Descripcion</b></td>
            <td><b>Precio</b></td>
            <td><b>Cantidad</b></td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $productos[$id]["nombre"] ?></td>
            <td><?= $productos[$id]["descripcion"]?></td>
            <td><?= $productos[$id]["precio"]?></td> 
            <td><a href="Ejer7.php?accion=comprar&id=<?= $id ?>">Comprar</a></td>
        </tr>
        </tbody>
    </table>
    </form>
    <?php
    }
    ?>
</body>
</html>


