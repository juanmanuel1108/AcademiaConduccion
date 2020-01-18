<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CalificacionesController extends Controller
{
    public function ViewInsertCalifica()
    {
        $infoRegistro = App\registro::All();
        return view('Calificaciones/insert', compact('infoRegistro')); 
    }

    public function InsertCalifica(Request $calificacion)
    {
        $calificacion->validate([
            'registro' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'calificacion' => 'required',
            'opinion' => 'required'
        ]);

        $instanciaCalificacion = new App\calificano;
        $instanciaCalificacion->registros_id = $calificacion->registro;
        $instanciaCalificacion->nombre = $calificacion->nombre;
        $instanciaCalificacion->apellido = $calificacion->apellido;
        $instanciaCalificacion->telefono = $calificacion->telefono;
        $instanciaCalificacion->calificacion = $calificacion->calificacion;
        $instanciaCalificacion->opinion = $calificacion->opinion;
        $instanciaCalificacion->save();
        

        return redirect('Calificaciones/view')->with('guardado', 'La cita fue guardada con exito!');
    }

    public function ViewCalifica()
    {
        $objetoretornado = App\calificano::paginate(3);
        return view('Calificaciones/view',compact('objetoretornado'));
    }


    public function UpdateCalifica($id){
        $infoRegistro = App\registro::All();
        $updatecalificacion = App\calificano::FindOrFail($id);
        return view('Calificaciones/update',compact('updatecalificacion','infoRegistro'));
    }

    public function DeleteCalifica($id){
        $deletecalificacion = App\calificano::FindOrFail($id);
        $deletecalificacion->delete();
        return redirect('Calificaciones/view')->with('guardado', 'El proveedor fue borrado con exito!');
    }

    public function UpdateBdCalifica(Request $calificacion)
    {
        $calificacion->validate([
            'registro' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'calificacion' => 'required',
            'opinion' => 'required'
        ]);

            $instanciaCalificacion = App\calificano:: FindOrFail($calificacion->id);
            $instanciaCalificacion->registros_id = $calificacion->registro;
            $instanciaCalificacion->nombre = $calificacion->nombre;
            $instanciaCalificacion->apellido = $calificacion->apellido;
            $instanciaCalificacion->telefono = $calificacion->telefono;
            $instanciaCalificacion->calificacion = $calificacion->calificacion;
            $instanciaCalificacion->opinion = $calificacion->opinion;
            $instanciaCalificacion->update();

        return redirect('Calificaciones/view')->with('guardado','Registro Actualizado Con Exito!');
        
        
    }
}
