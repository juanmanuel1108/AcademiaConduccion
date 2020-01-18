@extends('menu')

@section('textoaqui')

<form action="{{ route('UpdateBdCita') }}" method="POST" novalidate name="miformulario">
  @csrf
  <div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded" enctype="multipart/form-data">
      <center>
        <h2 class="titulos">Actualizar Cita</h2>

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
        <div class="col-md-4 mb-3">
          @error('nombre')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer01">Nombre</label>
          <input type="hidden" name="id" value="{{$updatecita->id}}">
          <input type="text" class="form-control" id="validationServer01" name="nombre" placeholder="Nombre" value="{{$updatecita->nombre}}" required>
          <div class="invalid-feedback">
            Por favor ingrese su nombre!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          @error('apellido')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer02">Apellido</label>
          <input type="text" class="form-control" id="validationServer02" name="apellido" placeholder="Apellido" value="{{$updatecita->apellido}}"
            required>
          <div class="invalid-feedback">
            Por favor ingrese su apellido!
          </div>
        </div>
        <div class="col-md-4 mb-3">
            @error('telefono')
            <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
            @enderror
            <label for="validationServer01">Telefono</label>
            <input type="text" class="form-control" id="validationServer01" name="telefono" placeholder="Telefono" value="{{$updatecita->telefono}}"
              required>
            <div class="invalid-feedback">
              Por favor ingrese su telefono!
            </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6 mb-2">
            @error('email')
            <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
            @enderror
            <label for="validationServer03">Correo Electronico</label>
            <input type="text" class="form-control" id="validationServer03" name="email" placeholder="Correo Electronico" value="{{$updatecita->email}}"
              required>
            <div class="invalid-feedback">
              Por favor ingrese su Correo Electronico!
            </div>
        </div>
        <div class="col-md-6 mb-2">
          @error('foto')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label>Foto</label>
          <input type="file" class="form-control" name="foto" accept=".jpg , .png , .gif" value="{{ asset('foto')}}">
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6 mb-2">
          @error('fecha')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer01">Fecha</label>
          <input type="date" class="form-control" id="validationServer01" name="fecha" value="{{$updatecita->fecha}}" required>
          <div class="invalid-feedback">
            Por favor ingrese la fecha para la cual quiere su cita!
          </div>
        </div>
        <div class="col-md-6 mb-2">
            @error('hora')
            <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
            @enderror
            <label for="validationServer01">Hora</label>
            <input type="time" class="form-control" id="validationServer01" name="hora" value="{{$updatecita->hora}}" required>
            <div class="invalid-feedback">
              Por favor ingrese la Hora para la cual quiere su cita!
            </div>
          </div>
      </div>
      <br><br>
      <div class="form-row justify-content-center">
        <button type="submit" class="btn btn-success">Actualizar</button>


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