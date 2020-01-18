<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App;

class InscripcionesController extends Controller
{
    public function ViewInsertInscrip()
    {
        $infoRegistro = App\registro::All();
        return view('Inscripciones/insert', compact('infoRegistro')); 
    }

    public function InsertInscrip(Request $inscripcion)
    {
        $inscripcion->validate([
            'registro' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'documento' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'curso' => 'required',
            'foto' => 'required'
        ]);


        $ruta = Storage::disk('public')->put('Inscripciones',$inscripcion->file('foto'));
        $unavariable = asset($ruta);
        

        $instanciaInscripcion = new App\inscripcione;
        $instanciaInscripcion->registros_id = $inscripcion->registro;
        $instanciaInscripcion->nombre = $inscripcion->nombre;
        $instanciaInscripcion->apellido = $inscripcion->apellido;
        $instanciaInscripcion->documento = $inscripcion->documento;
        $instanciaInscripcion->direccion = $inscripcion->direccion;
        $instanciaInscripcion->telefono = $inscripcion->telefono;
        $instanciaInscripcion->email = $inscripcion->email;
        $instanciaInscripcion->curso = $inscripcion->curso;
        $instanciaInscripcion->foto = $unavariable;
        $instanciaInscripcion->foto_url = $unavariable;
        $instanciaInscripcion->save();
        

        return redirect('Inscripciones/view')->with('guardado', 'La cita fue guardada con exito!');
    }

    public function ViewInscrip()
    {
        $objetoretornado = App\inscripcione::paginate(3);
        return view('Inscripciones/view',compact('objetoretornado'));
    }


    public function UpdateInscrip($id){
        $infoRegistro = App\registro::All();
        $updateinscripcion = App\inscripcione::FindOrFail($id);
        return view('Inscripciones/update',compact('updateinscripcion','infoRegistro'));
    }

    public function DeleteInscrip($id){
        $deleteinscripcion = App\inscripcione::FindOrFail($id);
        $deleteinscripcion->delete();
        return redirect('Inscripciones/view')->with('guardado', 'El proveedor fue borrado con exito!');
    }

    public function UpdateBdInscrip(Request $inscripcion)
    {
        $inscripcion->validate([
            'registro' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'documento' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'curso' => 'required',
            'foto' => 'required'
        ]);

            $instanciaInscripcion = App\inscripcione:: FindOrFail($inscripcion->id);
            $instanciaInscripcion->registros_id = $inscripcion->registro;
            $instanciaInscripcion->nombre = $inscripcion->nombre;
            $instanciaInscripcion->apellido = $inscripcion->apellido;
            $instanciaInscripcion->documento = $inscripcion->documento;
            $instanciaInscripcion->direccion = $inscripcion->direccion;
            $instanciaInscripcion->telefono = $inscripcion->telefono;
            $instanciaInscripcion->email = $inscripcion->email;
            $instanciaInscripcion->curso = $inscripcion->curso;
            $instanciaInscripcion->foto = $inscripcion->foto;
            $instanciaInscripcion->update();

        return redirect('Inscripciones/view')->with('guardado','Registro Actualizado Con Exito!');
        
        
    }
}
