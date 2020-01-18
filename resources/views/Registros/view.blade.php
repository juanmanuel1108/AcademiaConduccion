@extends('menu')

@section('textoaqui')
<div <div class="container shadow p-3 mb-5 bg-white rounded">
    <center>
        <h2 class="text-center">Listado de Alumnos Registrados</h2><br>
    </center>
    <div class="card-columns">
    @foreach ($objetoretornado as $cita)
    <div class="card">
            
              <img src="{{ $cita->foto }}" class="card-img-top" height="280px" width="290px">
              <div class="card-body">
                  <center>
              <h5 class="card-title"><?php echo $cita->usuario; ?></h5>
              <p class="card-text"><?php echo $cita->telefono; ?></p>
              <p class="card-text"><?php echo $cita->correo; ?></p>
              
              </center>
              </div>
              <div class="card-footer">
                  <center>
                <a href="{{ route('UpdateRegistro', $cita) }}"><img src="{{ asset('Img/svg/reload.svg')}}"></a>
              <img>
              <img>
              <img>
              <a href="{{ route('DeleteRegistro', $cita) }}"><img src="{{ asset('Img/svg/x.svg')}}"></a>
                  </center>

            </div>
          </div>
          @endforeach
          
    </div>
    @if ($objetoretornado->lastPage() >1)
                @endif
        {{ $objetoretornado->links() }}
</div>

@endsection