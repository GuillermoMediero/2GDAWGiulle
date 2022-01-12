<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Redirect;

class ProductoController extends Controller
{
    //

    public function index() {
        $productos = Producto::all();
        return view('productos', ['productos' => $productos]);
    }

    public function show($id){
        $detalles = Producto::find($id);
        return view('detalles', ['detalles' => $detalles]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $producto = new Producto;

        $producto->nombre = $request->get('nombre');
        $producto->precio = $request->get('precio');
        $producto->cantidad = $request->get('cantidad');
        $producto->descripcion = $request->get('descripcion');

        $producto->save();

        return redirect('/productos');
    }
}
