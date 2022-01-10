@extends('layouts/cont')

@section('content')
@include('header')
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
    <a href="../index.php">Volver a la pagina</a>
@endsection