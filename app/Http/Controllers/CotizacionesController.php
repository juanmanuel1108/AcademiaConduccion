<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App;

class CotizacionesController extends Controller
{
    public function ViewInsertCotiza()
    {
        $infoRegistro = App\registro::All();
        return view('Cotizaciones/insert', compact('infoRegistro')); 
    }

    public function InsertCotiza(Request $cotizacion)
    {
        $cotizacion->validate([
            'registro' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required'
        ]);

        $instanciaCotizacion = new App\cotizacione;
        $instanciaCotizacion->registros_id = $cotizacion->registro;
        $instanciaCotizacion->nombre = $cotizacion->nombre;
        $instanciaCotizacion->apellido = $cotizacion->apellido;
        $instanciaCotizacion->telefono = $cotizacion->telefono;
        $instanciaCotizacion->email = $cotizacion->email;
        $instanciaCotizacion->save();
        

        return redirect('Cotizaciones/view')->with('guardado', 'La cita fue guardada con exito!');
    }

    public function ViewCotiza()
    {
        $objetoretornado = App\cotizacione::paginate(3);
        return view('Cotizaciones/view',compact('objetoretornado'));
    }


    public function UpdateCotiza($id){
        $infoRegistro = App\registro::All();
        $updatecotizacion = App\cotizacione::FindOrFail($id);
        return view('Cotizaciones/update',compact('updatecotizacion','infoRegistro'));
    }

    public function DeleteCotiza($id){
        $deletecotizacion = App\cotizacione::FindOrFail($id);
        $deletecotizacion->delete();
        return redirect('Cotizaciones/view')->with('guardado', 'El proveedor fue borrado con exito!');
    }

    public function UpdateBdCotiza(Request $cotizacion)
    {
        $cotizacion->validate([
            'registro' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required'
        ]);

            $instanciaCotizacion = App\cotizacione:: FindOrFail($cotizacion->id);
            $instanciaCotizacion->registros_id = $cotizacion->registro;
            $instanciaCotizacion->nombre = $cotizacion->nombre;
            $instanciaCotizacion->apellido = $cotizacion->apellido;
            $instanciaCotizacion->telefono = $cotizacion->telefono;
            $instanciaCotizacion->email = $cotizacion->email;
            $instanciaCotizacion->update();

        return redirect('Cotizaciones/view')->with('guardado','Registro Actualizado Con Exito!');
        
        
    }
}
