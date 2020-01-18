<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App;

class CancelacionesController extends Controller
{
    public function ViewInsertCancel()
    {
        $infoCita = App\cita::All();
        return view('Cancelaciones/insert', compact('infoCita')); 
    }

    public function InsertCancel(Request $cancelacion)
    {
        $instanciacancelacion = new App\cancelacione;
        $instanciacancelacion->citas_id = $cancelacion->cita;
        $instanciacancelacion->save();

        return redirect('Cancelaciones/view')->with('guardado',"Producto insertado con exito!");
    }

    public function ViewCancel()
    {
        $objetoretornado = App\cancelacione::paginate(3);
        return view('Cancelaciones/view',compact('objetoretornado'));
    }

    public function DeleteCancel($id){
        $deletecancelacion = App\cancelacione::FindOrFail($id);
        $deletecancelacion->delete();
        return redirect('Cancelaciones/view')->with('guardado', 'El proveedor fue borrado con exito!');
    }
}
