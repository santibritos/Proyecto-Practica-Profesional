@extends('index.navbar')

@section('content')
<br><br>
<label for="HeaderC" class="form-label mt-4 ms-3"><h1><b>Cuentas</b></h1></label>

<div class="row g-3 align-items-center mb-3 ms-4 ">
  <label for="formGroupInput1" class="form-label"><b>Codigo de la cuenta</b></label>
  <div class="col-auto">
    <input type="text" class="form-control" id="formGroupInput2" placeholder="Codigo">
  </div>
  <div class="col-auto">
    <button type="button" class="btn btn-dark">Buscar</button>
  </div>
</div>

<div class="row g-3 align-items-center mb-3 ms-4 ">
  <label for="formGroupInput2" class="form-label"><b>Nombre de la cuenta</b></label>
  <div class="col-auto">
    <input type="text" class="form-control" id="formGroupInput2" placeholder="Nombre">
  </div>
  <div class="col-auto">
    <button type="button" class="btn btn-dark">Buscar</button>
  </div>
</div>

<div class="row g-3 mb-3 ms-4">
    <div class="col-auto ">
        <div class="row"><button type="button" class="btn btn-dark mt-4">Agregar</button></div>
        <div class="row"><button type="button" class="btn btn-dark">Modificar</button></div>
        <div class="row"><button type="button" class="btn btn-dark">Eliminar</button></div>
        <div class="row"><button type="button" class="btn btn-dark">Ver Todos</button></div>
        <div class="row"><button type="button" class="btn btn-dark">Cerrar</button></div>
    </div>
    <div class="col-auto table-responsive">
        <table class="table table-dark table-hover">
            <thead >
                <tr>
                    <th scope="col">Codigo de Cuenta</th>
                    <th scope="col">Nombre de Cuenta</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                  <td>010101</td>
                  <td>GENERAL S.A.U.</td>
                </tr>
                <tr>
                  <td>010201</td>
                  <td>GRAL. DEPORTES</td>
                </tr>
                <tr>
                  <td>010202</td>
                  <td>FUTBOL</td>
                </tr>
                <tr>
                  <td>010203</td>
                  <td>VOLLEY</td>
                </tr>
                <tr>
                  <td>010204</td>
                  <td>BASKET</td>
                </tr>
                <tr>
                  <td>010205</td>
                  <td>HOCKEY</td>
                </tr>
                <tr>
                  <td>010206</td>
                  <td>GYM</td>
                </tr>
                <tr>
                  <td>010207</td>
                  <td>PING PONG</td>
                </tr>
                <tr>
                  <td>010301</td>
                  <td>BIBLIOTECA</td>
                </tr>
                <tr>
                  <td>010401</td>
                  <td>GRLA. MEDICINA</td>
                </tr>
                <tr>
                  <td>010402</td>
                  <td>ODONTOLOGIA</td>
                </tr>
                <tr>
                  <td>010403</td>
                  <td>PRESTACION MEDICA</td>
                </tr>
                <tr>
                  <td>010404</td>
                  <td>PRESTACION PSICOLOGICA</td>
                </tr>
            </tbody>
        </table>
    </div>
    
</div>
@endsection