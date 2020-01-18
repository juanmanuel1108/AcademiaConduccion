@extends('menu')

@section('textoaqui')

<form action="{{ route('UpdateBdInscripcion') }}" method="POST" novalidate name="miformulario">
  @csrf
  <div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded" enctype="multipart/form-data">
      <center>
        <h2 class="titulos">Actualizar Inscripcion</h2>

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
              @error('registro')
              <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
              @enderror
              <label for="validationServer01">Seleccione su nombre de Usuario</label>
              <input type="hidden" name="id" value="{{$updateinscripcion->id}}">
              <select class="form-control" name="registro" id="validationServer01" value="{{$updateinscripcion->registro}}" required>
                <option value="nada">Seleccione...</option>
                @foreach ($infoRegistro as $registro)
                <option value="{{ $registro->id }}">{{ $registro->usuario }}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
                Por favor seleccione un nombre!
              </div>
            </div>
        <div class="col-md-4 mb-3">
          @error('nombre')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer01">Nombres</label>
          <input type="text" class="form-control" id="validationServer01" name="nombre" placeholder="Nombre" value="{{$updateinscripcion->nombre}}" required>
          <div class="invalid-feedback">
            Por favor ingrese su nombre!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          @error('apellido')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label for="validationServer02">Apellidos</label>
          <input type="text" class="form-control" id="validationServer02" name="apellido" placeholder="Apellido" value="{{$updateinscripcion->apellido}}" required>
          <div class="invalid-feedback">
            Por favor ingrese su apellido!
          </div>
        </div>
        
      </div>


      <div class="form-row">
          <div class="col-md-4 mb-3">
              @error('documento')
              <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
              @enderror
              <label for="validationServer01">Nro. Documento</label>
              <input type="text" class="form-control" id="validationServer01" name="documento" placeholder="Documento" value="{{$updateinscripcion->documento}}" required>
              <div class="invalid-feedback">
                Por favor ingrese su numero de documento!
              </div>
          </div>
          <div class="col-md-4 mb-3">
              @error('direccion')
              <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
              @enderror
              <label for="validationServer03">Direccion</label>
              <input type="text" class="form-control" id="validationServer03" name="direccion" placeholder="Direccion" value="{{$updateinscripcion->direccion}}" required>
              <div class="invalid-feedback">
                Por favor ingrese su Direccion!
              </div>
          </div>
          <div class="col-md-4 mb-3">
              @error('email')
              <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
              @enderror
              <label for="validationServer03">Correo Electronico</label>
              <input type="text" class="form-control" id="validationServer03" name="email" placeholder="Correo Electronico" value="{{$updateinscripcion->email}}" required>
              <div class="invalid-feedback">
                Por favor ingrese su Correo Electronico!
              </div>
          </div>
        </div>


      <div class="form-row">
          <div class="col-md-4 mb-3">
              @error('telefono')
              <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
              @enderror
              <label for="validationServer03">Telefono</label>
              <input type="text" class="form-control" id="validationServer03" name="telefono" placeholder="Telefono" value="{{$updateinscripcion->telefono}}" required>
              <div class="invalid-feedback">
                Por favor ingrese su Telefono!
              </div>
          </div>
        <div class="col-md-4 mb-3">
            @error('curso')
            <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
            @enderror
            <label for="validationServer03">Curso a Realizar</label>
            <select class="form-control" name="curso" id="validationServer01" value="{{$updateinscripcion->curso}}" required>
                <option value="nada">Seleccione...</option>
                <option value="a1">A1 - Motos < 125</option>
                <option value="a2">A2 - Motos > 125</option>
                <option value="b1">B1 - (particular) Autos y Microbuses</option>
                <option value="b2">B2 - (particular) Camiones y Busetas</option>
                <option value="b3">B3 - (particular) Rigidos y Articulados</option>
                <option value="c1">C1 - (publico) Camionetas y Camperos</option>
                <option value="c2">C2 - (publico) Buses y Volquetas</option>
                <option value="c3">C3 - (puvlico) Vehiculos Articulados</option>
            </select>
            <div class="invalid-feedback">
              Por favor seleccione el curso que le interesa!
            </div>
        </div>
        <div class="col-md-4 mb-3">
          @error('foto')
          <div class="alert alert-warning" role="alert">Este campo es obligatorio!</div>
          @enderror
          <label>Foto</label>
          <input type="file" class="form-control" name="foto" accept=".jpg , .png , .gif" value="{{$updateinscripcion->foto}}" >
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