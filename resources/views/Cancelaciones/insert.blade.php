@extends('menu')

@section('textoaqui')

<form action="{{ route('InsertarCancelacion') }}" method="POST" novalidate name="miformulario">
  @csrf
  <div class="container">
    <div class="shadow-lg p-3 mb-5 bg-white rounded">
      <center>
        <h2 class="titulos">Cancelar Cita</h2>
      </center>
      <br>
      <div class="form-row justify-content-center">
        <div class="col-sm-4 sm-2">
          <label for="validationServer01">Seleccione su nombre</label>
          <select class="form-control" name="cita" id="validationServer01" required>
            <option value="nada">Seleccione...</option>
            @foreach ($infoCita as $cita)
            <option value="{{ $cita->id }}">{{ $cita->nombre . " " . $cita->apellido }}</option>
            @endforeach
          </select>
          <div class="invalid-feedback">
            Por favor seleccione un nombre!
          </div>
        </div>
      </div>
        <br><br>
        <div class="form-row justify-content-center">
          <button type="submit" class="btn btn-success">Cancelar Cita</button>
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