<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
@include('header')
<body>
    <table border="1">
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
        </tr>
        @foreach($zapatillas as $zapatilla)
        <tr>
            <td>{{$zapatilla->getMarca()}}</td>
            <td>{{$zapatilla->getModelo()}}</td>
            <td>{{$zapatilla->getTipo()}}</td>
            <td>{{$zapatilla->getPrecio()}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>