<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Marca</td>
            <td>{{$zapatilla->getMarca()}}</td>
        </tr>
        <tr>
            <td>Modelo</td>
            <td>{{$zapatilla->getModelo()}}</td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td>{{$zapatilla->getTipo()}}</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>{{$zapatilla->getPrecio()}}</td>
        </tr>
    </table>
</body>
</html>