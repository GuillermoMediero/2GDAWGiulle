<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalles del producto con el id {{$detalles->id}}</h1>
    <p>Nombre: {{ $detalles->nombre }}</p>
    <p>Precio: {{ $detalles->precio }}</p>
    <p>Cantidad: {{ $detalles->cantidad }}</p>
    <p>Descripcion: {{ $detalles->descripcion }}</p>

    <a href="{{ route('productos.index')}}">Volver atras</a>
</body>
</html>