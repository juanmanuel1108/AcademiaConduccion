<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App;

class RegistrosController extends Controller
{
    public function InsertRegis(Request $registro)
    {
        $registro->validate([
            'usuario' => 'required',
            'contraseña' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'foto' => 'required'
        ]);

        $ruta = Storage::disk('public')->put('Registros',$registro->file('foto'));
        $unavariable = asset($ruta);
        

        $instanciaRegistro = new App\registro;
        $instanciaRegistro->usuario = $registro->usuario;
        $instanciaRegistro->contraseña = $registro->contraseña;
        $instanciaRegistro->telefono = $registro->telefono;
        $instanciaRegistro->correo = $registro->correo;
        $instanciaRegistro->foto = $unavariable;
        $instanciaRegistro->foto_url = $unavariable;
        $instanciaRegistro->save();
        

        return redirect('Registros/view')->with('guardado', 'La cita fue guardada con exito!');
    }

    public function ViewRegis()
    {
        $objetoretornado = App\registro::paginate(3);
        return view('Registros/view',compact('objetoretornado'));
    }


    public function UpdateRegis($id){
        $updateregistro = App\registro::FindOrFail($id);
        return view('Registros/update',compact('updateregistro'));
    }

    public function DeleteRegis($id){
        $deleteregistro = App\registro::FindOrFail($id);
        $deleteregistro->delete();
        return redirect('Registros/view')->with('guardado', 'El proveedor fue borrado con exito!');
    }

    public function UpdateBdRegis(Request $registro)
    {
        $registro->validate([
            'usuario' => 'required',
            'contraseña' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'foto' => 'required'
        ]);

            $instanciaRegistro = App\registro:: FindOrFail($registro->id);
            $instanciaRegistro->usuario = $registro->usuario;
            $instanciaRegistro->contraseña = $registro->contraseña;
            $instanciaRegistro->telefono = $registro->telefono;
            $instanciaRegistro->correo = $registro->correo;
            $instanciaRegistro->foto = $registro->foto;
            $instanciaRegistro->update();

        return redirect('Registros/view')->with('guardado','Registro Actualizado Con Exito!');
        
        
    }
}
