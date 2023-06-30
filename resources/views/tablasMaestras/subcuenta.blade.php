@extends('index.navbar')

@section('content')

<br>
<br>

<div class="lineal">
  <h1>Subcuenta</h1>

  <div class="probando">
    <fieldset>
      <legend>Busqueda</legend>
      <div class="card p-4 " style="background: -webkit-linear-gradient(top right, #7EA8BE, #0388cf);">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Codigo de Subcuenta</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtcodigo" placeholder="Codigo de Subcuenta">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group row">
              <label class="col-sm-4 col-form-label">Nombre de Subcuenta</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtnombre" placeholder="Nombre de Subcuenta">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <button type="submit" class="btn btn-primary mb-3">Buscar</button>
          </div>
        </div>

      </fieldset>
    </div>

    <br>

    <div class="container">
      <div>
        <div class="table-responsive table-container">
          <table class="table table-bordered table-rounded">
            <thead class="thead-light">
              <tr>
                <th scope="col">Código de Subcuenta</th>
                <th scope="col">Nombre del Subcuenta</th>
              </tr>
            </thead>
            <tbody>
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
              <!-- Agregar más filas según sea necesario -->
            </tbody>
          </table>
        </div>
      </div>
      <div class="margin-div">
        <button type="submit" class="btn btn-primary mb-3 custom-button" data-bs-toggle="modal"
          data-bs-target="#modalAgregar">Agregar</button>
        <br>
        <button type="submit" class="btn btn-primary mb-3 custom-button">Modificar</button>
        <br>
        <button type="submit" class="btn btn-primary mb-3 custom-button">Eliminar</button>
        <br>
        <button type="submit" class="btn btn-primary mb-3 custom-button">Ver todos</button>
      </div>
    </div>

    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregar" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="card">
              <div class="card text-left text-bg-dark">
                <div class="card-header">
                  Datos de la subcuenta
                </div>
                <div class="card-body">
                  <div class="col">
                <div class="row">
                <label class="col-sm-3 col-form-label">Nombre de Cuenta</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="txtnombreSCuenta" placeholder="Nombre de Subcuenta">
                  </div>
                </div>
                <div class="row">
                <label class="col-sm-3 col-form-label">Codigo de Cuenta</label>
                <div class="col-sm-9">
                    <div class="input-group">
                      <div class="col-sm-3">
                       <input type="text" class="form-control" id="txtcodigoSCuenta1" placeholder="Cód. de Subcuenta."> 
                     </div>
                     <div class="col-sm-9">
                       <input type="text" class="form-control" id="txtcodigoSCuenta2" placeholder="Código de Subcuenta">
                     </div>
                  </div>
                </div>
                      <label class="col-sm-4 col-form-label">Cuenta</label>
                      <div class="col-sm-8">
                        <select class="form-control" id="ddlCuenta">
                          <option value="010101">GENERAL S.A.U.</option>
                          <option value="010201">GRAL. DEPORTES</option>
                          <option value="010202">FUTBOL</option>
                          <option value="010203">VOLLEY</option>
                          <option value="010204">BASKET</option>
                          <option value="010205">HOCKEY</option>
                          <option value="010206">GYM</option>
                          <option value="010207">PING PONG</option>
                          <option value="010301">BIBLIOTECA</option>
                          <option value="010401">GRLA. MEDICINA</option>
                          <option value="010402">ODONTOLOGIA</option>
                          <option value="010403">PRESTACION MEDICA</option>
                          <option value="010404">PRESTACION PSICOLOGICA</option>
                          <!-- Agregar más opciones según sea necesario -->
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary mb-3 mt-3 custom-button" onclick="agregar()">Agregar</button>
                      <button type="submit" class="btn btn-primary mb-3 mt-3 custom-button" onclick="cerrarVentana()">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

<script>
  function cerrarVentana() {
 
    $('#modalAgregar').modal('toggle');
  }

  function agregar() {
        var codigoSCuenta1 = $('#txtcodigoSCuenta1').val();
        var codigoSCuenta2 = $('#txtcodigoSCuenta2').val();
        var nombreSCuenta = $('#txtnombreSCuenta').val();
        

        if (codigoSCuenta1 === '' || codigoSCuenta2 === '' || nombreSCuenta === '') {
            alert("Complete todos los campos");
        } else {
                alert("Subcuenta agregada con éxito");
            }
}
</script>

@endsection
