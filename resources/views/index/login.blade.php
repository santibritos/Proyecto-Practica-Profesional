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
      <link rel="stylesheet" href= "{{asset('app.css')}} ">
      <link rel="stylesheet" href= "{{asset('login.css')}} ">
  </head>
      <section class="side">
        <div class="titulo"><h1 class="h1-title">SACC</h1></div>
      </section>
      <section class="main">
    <body>
        <div class="login-container">
        <form action="/menu" method="get">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="email1" name="email" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password1" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
        <div class="crear-usuario">
          ¿No tienes una cuenta? <a href="/crearUsuario">Crear usuario</a>
        </div>
        </div>

      </section> 
    </body>
</html>

