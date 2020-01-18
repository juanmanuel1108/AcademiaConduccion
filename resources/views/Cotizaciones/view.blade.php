@extends('menu')

@section('textoaqui')

@if (empty(session('guardado')==""))
    @else
    <div class="alert alert-success" role="alert">
            <i class="close icon"></i>
        
        <div class="header">
            {{session('guardado')}}
        </div>
        </div>

@endif


<div <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <center>
        <h2 class="center">Listado de Cotizaciones</h2><br>
    </center>
        <form action="" method="get">
            <table class="ui green table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objetoretornado as $cotizacion)
                        
                        <tr>
                            <td>{{ $cotizacion->nombre }}</td>
                            <td>{{ $cotizacion->apellido }}</td>
                            <td>{{ $cotizacion->telefono }}</td>
                            <td>{{ $cotizacion->email }}</td>
                            <td>
                        
                            <a href="{{ route('UpdateCotizacion', $cotizacion) }}"><img src="{{ asset('Img/svg/reload.svg')}}"></a>
                            <img>
                            <img>
                            <img>
                            <img>
                            <a href="{{ route('DeleteCotizacion', $cotizacion) }}"><img src="{{ asset('Img/svg/x.svg')}}"></a>
                            
                    
                            </td>
                        </tr>
                        @endforeach
                </tbody>
                @if ($objetoretornado->lastPage() >1)
                @endif
            </table>
            {{ $objetoretornado->links() }}
        </form>
    </div>
@endsection