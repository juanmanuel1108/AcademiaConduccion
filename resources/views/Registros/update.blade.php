@extends('menu')

@section('textoaqui')

<form action="{{ route('UpdateBdRegistro') }}" method="POST" novalidate name="miformulario">
  @csrf
  <div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded" enctype="multipart/form-data">
      <center>
        <h2 class="titulos">Actualizar Alumno</h2>

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
          @error('usuario')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer01">Nombre Del Usuario</label>
          <input type="hidden" name="id" value="{{$updateregistro->id}}">
          <input type="text" class="form-control" id="validationServer01" name="usuario" value="{{$updateregistro->usuario}}" required>
          <div class="invalid-feedback">
            Por favor ingrese su nombre!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          @error('contraseña')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer02">Contraseña</label>
          <input type="password" class="form-control" id="validationServer02" name="contraseña" value="{{$updateregistro->contraseña}}"
            required>
          <div class="invalid-feedback">
            Por favor ingrese su Contraseña!
          </div>
        </div>
        <div class="col-md-4 mb-3">
            @error('telefono')
            <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
            @enderror
            <label for="validationServer01">Telefono</label>
            <input type="text" class="form-control" id="validationServer01" name="telefono" value="{{$updateregistro->telefono}}"
              required>
            <div class="invalid-feedback">
              Por favor ingrese su telefono!
            </div>
        </div>
      </div>

      <div class="form-row">
        <div class="col-md-6 mb-2">
            @error('correo')
            <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
            @enderror
            <label for="validationServer03">Correo Electronico</label>
            <input type="text" class="form-control" id="validationServer03" name="correo" value="{{$updateregistro->correo}}"
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
          <input type="file" class="form-control" name="foto" accept=".jpg , .png , .gif">
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