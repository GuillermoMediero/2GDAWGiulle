@extends('layouts/cont')

@section('content')
@include('header')
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
@endsection
