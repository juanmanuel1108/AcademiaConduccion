@extends('menu')

@section('textoaqui')


<div <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <center>
        <h2 class="center">Listado de Cancelaciones de Citas</h2><br>
    </center>
        <form action="" method="get">
            <table class="ui green table">
                <thead>
                    <tr>
                        <th>Numero de Usuario Cancelado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($objetoretornado as $cancelacion)
                        
                        <tr>
                            <td>{{ $cancelacion->citas_id }}</td>

                            <td>
                        
                            <img src="{{ asset('Img/svg/reload.svg')}}">
                            <img>
                            <img>
                            <img>
                            <img>
                            <a href="{{ route('DeleteCancelacion', $cancelacion) }}"><img src="{{ asset('Img/svg/x.svg')}}"></a>
                            
                    
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