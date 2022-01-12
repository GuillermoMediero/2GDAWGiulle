<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;
use Redirect;

class MaquinasController extends Controller
{
    //

    public function mostrar(){
        return 'Prubea controlador';
    }

    public function store(Request $request)
    {
        // Validar la petición...

        $maquina = new Maquina;

        $maquina->nombre = request('nombre');

        $maquina->save();
    }
   
    public function update(Request $request, $id)
    {         
        $maquina = Maquina::find(1);

        $maquina->nombre = request('nombre');

        $maquina->save();
    }
   
    public function destroy($id)
    {
        $$maquina = Maquina::find($id);
        $maquina->delete();
        
        // Alternativa
        Maquina::destroy($id);
        
        //Borrar modelos por consulta (borra todos los que encuentre en la consulta)
        Maquina::where('id',$id)->delete();        
    }
}
