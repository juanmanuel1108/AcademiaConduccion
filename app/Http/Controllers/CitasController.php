<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App;

class CitasController extends Controller
{
    public function InsertCit(Request $cita)
    {
        $cita->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'foto' => 'required'
        ]);


        $ruta = Storage::disk('public')->put('Citas',$cita->file('foto'));
        $unavariable = asset($ruta);
        

        $instanciaCita = new App\cita;
        $instanciaCita->nombre = $cita->nombre;
        $instanciaCita->apellido = $cita->apellido;
        $instanciaCita->telefono = $cita->telefono;
        $instanciaCita->email = $cita->email;
        $instanciaCita->fecha = $cita->fecha;
        $instanciaCita->hora = $cita->hora;
        $instanciaCita->foto = $unavariable;
        $instanciaCita->foto_url = $unavariable;
        $instanciaCita->save();
        

        return redirect('Citas/view')->with('guardado', 'La cita fue guardada con exito!');
    }

    public function ViewCit()
    {
        $objetoretornado = App\cita::paginate(3);
        return view('Citas/view',compact('objetoretornado'));
    }


    public function UpdateCit($id){
        $updatecita = App\cita::FindOrFail($id);
        return view('Citas/update',compact('updatecita'));
    }

    public function DeleteCit($id){
        $deletecita = App\cita::FindOrFail($id);
        $deletecita->delete();
        return redirect('Citas/view')->with('guardado', 'El proveedor fue borrado con exito!');
    }

    public function UpdateBdCit(Request $cita)
    {
        $cita->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'foto' => 'required'
        ]);

            $instanciaCita = App\cita:: FindOrFail($cita->id);
            $instanciaCita->nombre = $cita->nombre;
            $instanciaCita->apellido = $cita->apellido;
            $instanciaCita->telefono = $cita->telefono;
            $instanciaCita->email = $cita->email;
            $instanciaCita->fecha = $cita->fecha;
            $instanciaCita->hora = $cita->hora;
            $instanciaCita->foto = $cita->foto;
            $instanciaCita->update();

        return redirect('Citas/view')->with('guardado','Registro Actualizado Con Exito!');
        
        
    }
    
}
