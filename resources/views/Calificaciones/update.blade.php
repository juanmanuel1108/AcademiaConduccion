@extends('menu')

@section('textoaqui')

<form action="{{ route('UpdateBdCalificacion') }}" method="POST" novalidate name="miformulario">
  @csrf
  <div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded" enctype="multipart/form-data">
      <center>
        <h2 class="titulos">Actualizar Calificacion del Curso</h2>

        @if ($errors->any())
        <div class="alert alert-warning" role="alert">
          @foreach ($errors->all() as $e)
          {{ $e }} <br>
          @endforeach
        </div>
        @endif
      </center>
      <br>
      <div class="form-row">
          <div class="col-sm-4 sm-2">
              <label for="validationServer01">Seleccione su nombre de Usuario</label>
              <input type="hidden" name="id" value="{{$updatecalificacion->id}}">
              <select class="form-control" name="registro" id="validationServer01" value="{{$updatecalificacion->registro}}" required>
                <option value="nada">Seleccione...</option>
                @foreach ($infoRegistro as $registro)
                <option value="{{ $registro->id }}">{{ $registro->usuario }}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
                Por favor seleccione su nombre de usuario!
              </div>
            </div>
        <div class="col-md-4 mb-3">
          @error('nombre')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer01">Nombres</label>
          <input type="text" class="form-control" id="validationServer01" name="nombre" placeholder="Nombre" value="{{$updatecalificacion->nombre}}" required>
          <div class="invalid-feedback">
            Por favor ingrese su nombre!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          @error('apellido')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer02">Apellidos</label>
          <input type="text" class="form-control" id="validationServer02" name="apellido" placeholder="Apellido" value="{{$updatecalificacion->apellido}}" required>
          <div class="invalid-feedback">
            Por favor ingrese su apellido!
          </div>
        </div>
        
      </div>


      <div class="form-row">
          <div class="col-md-6 mb-2">
              @error('telefono')
              <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
              @enderror
              <label for="validationServer01">Telefono</label>
              <input type="text" class="form-control" id="validationServer01" name="telefono" placeholder="Telefono" value="{{$updatecalificacion->telefono}}" required>
              <div class="invalid-feedback">
                Por favor ingrese su numero de Telefono!
              </div>
          </div>
          <div class="col-md-6 mb-2">
              @error('calificacion')
              <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
              @enderror
              <label for="validationServer03">Calificanos del 1 al 10</label>
              <input type="number" class="form-control" id="validationServer03" name="calificacion" placeholder="Calificanos" value="{{$updatecalificacion->calificacion}}" required>
              <div class="invalid-feedback">
                Por favor ingrese su Calificacion!
              </div>
          </div>
        </div>

        <div class="form-row justify-content-center">
          <div class="col-sm-12 sm-1">
              @error('opinion')
              <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
              @enderror
              <label for="validationServer02">Danos una Opinion</label>
              <input type="text" class="form-control" id="validationServer02" name="opinion" placeholder="Opinion del Curso" value="{{$updatecalificacion->opinion}}" required>
              <div class="invalid-feedback">
                      Por favor ingrese su Opinion!
                    </div>
                </div>
              </div>
      

      <br><br>
      <div class="form-row justify-content-center">
        <button type="submit" class="btn btn-success">Actualizar</button>

      </div>
      </div>
    </div>
</form>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict';
    window.addEventListener('load', function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  window.addEventListener("load", function () {
    miformulario.codigo.addEventListener("keypress", soloNumeros, false);
  });

  //Solo permite introducir numeros.
  function soloNumeros(e) {
    var key = window.event ? e.which : e.keyCode;
    if (key < 48 || key > 57) {
      e.preventDefault();
    }
  }
</script>

@endsection