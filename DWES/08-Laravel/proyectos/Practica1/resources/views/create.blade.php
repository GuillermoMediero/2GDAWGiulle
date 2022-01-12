<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Añade un producto</h3>
    <form action=" {{ route('productos.store') }}">
     @csrf   
        <input type="text" id="nombre" name="nombre" placeholder="nombre">
        <input type="text" id="precio" name="precio" placeholder="precio">
        <input type="text" id="cantidad" name="cantidad" placeholder="cantidad">
        <input type="text" id="descripcion" name="despcripcion" placeholder="descripion">
    </form>
    <a href="{{ route('productos.index')}}">Volver atras</a>
</body>
</html>