
@extends('index.plantilla')
@section('content1')
<div class="container w-25 border p-4 mt-4">
<form action="/menu" method="get"onsubmit="return validateForm()">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Direccion Email</label>
    <input type="email" class="form-control" id="email1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="password1">
  </div>
  <button type="submit" class="btn btn-primary">Iniciar sesion</button>
</form>
</div>
<script>
function validateForm() {
  var email = document.getElementById('email1').value;
  var password = document.getElementById('password1').value;

  if (email.trim() === '' || password.trim() === '') {
    alert('Por favor, complete todos los campos.');
    return false;
  }
}
</script>
@endsection