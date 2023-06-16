<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SACC</title>
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link rel="stylesheet" href="{{asset('login.css')}}">
  </head>
  <body>
    <section class="side">
      <div class="titulo">
        <h1 class="h1-title">SACC</h1>
      </div>
    </section>
    <section class="main">
      <div class="login-container">
        <form action="/login" method="get" onsubmit="return validarContraseña()">
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
          </div>
          <div class="mb-3">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" pattern="[0-9]+" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contraseña" name="contraseña" required>
          </div>
          <div class="mb-3">
            <label for="confirmarContraseña" class="form-label">Repetir contraseña</label>
            <input type="password" class="form-control" id="confirmarContraseña" name="confirmarContraseña" required>
          </div>
          <button type="submit" class="btn btn-primary">Crear Usuario</button>
        </form>
        <div class="crear-usuario">
          ¿Ya tienes una cuenta? <a href="/login">Iniciar sesión</a>
        </div>
      </div>
    </section>

    <script>
    function validarContraseña() {
      var password = document.getElementById('contraseña').value;
      var confirmPassword = document.getElementById('confirmarContraseña').value;

      if (password !== confirmPassword) {
        alert('La contraseña y la confirmación de contraseña no coinciden.');
        return false;
      }
    }
  </script>

  </body>
</html>
