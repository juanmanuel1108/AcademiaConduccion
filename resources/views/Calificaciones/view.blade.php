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
        <h2 class="center">Listado de Calificaciones</h2><br>
    </center>
        <form action="" method="get">
            <table class="ui green table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Calificacion 1-10</th>
                        <th>Opinion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objetoretornado as $calificacion)
                        
                        <tr>
                            <td>{{ $calificacion->nombre }}</td>
                            <td>{{ $calificacion->apellido }}</td>
                            <td>{{ $calificacion->telefono }}</td>
                            <td>{{ $calificacion->calificacion }}</td>
                            <td>{{ $calificacion->opinion }}</td>
                            <td>
                        
                            <a href="{{ route('UpdateCalificacion', $calificacion) }}"><img src="{{ asset('Img/svg/reload.svg')}}"></a>
                            <img>
                            <img>
                            <img>
                            <img>
                            <a href="{{ route('DeleteCalificacion', $calificacion) }}"><img src="{{ asset('Img/svg/x.svg')}}"></a>
                    
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