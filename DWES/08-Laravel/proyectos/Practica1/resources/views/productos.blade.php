<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de productos</h1>
    <ul>
    @foreach ($productos as $producto)
        <li>Nombre: {{ $producto->nombre }}, Precio: {{ $producto->precio }} <a href="{{ route('productos.show' , $producto->id) }}">Ver detalles</a></li>
    @endforeach
    </ul>
    <p><a href="{{ route('productos.create') }}">Añadir producto</a></p>
    <form method="POST">
     @csrf
     @method("DELETE")
     
     <button type="submit">Eliminar</button>
</form>
</body>
</html>