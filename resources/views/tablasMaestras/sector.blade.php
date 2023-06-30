@extends('index.navbar')

@section('content')
<br><br>
<div class="lineal">
  <h1>Sector</h1>
  <div class="probando">
  <fieldset>
    <legend>Busqueda</legend>
    <div class="card p-4 " style="background: -webkit-linear-gradient(top right, #7EA8BE, #0388cf);">
      <div class="row">
        <div class="col-sm-6">
            <div class="form-group row">
              <label  class="col-sm-4 col-form-label">Codigo de Sector</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtcodigo" placeholder="Codigo de Sector">
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
              <label  class="col-sm-4 col-form-label">Nombre de Sector</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="txtnombre" placeholder="Nombre de Sector">
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
                <th scope="col">Código de Sector</th>
                <th scope="col">Nombre del Sector</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>0101</td>
                <td>GENERAL SAU</td>
              </tr>
              <tr>
                <td>0102</td>
                <td>DEPORTES</td>
              </tr>
              <tr>
                <td>0103</td>
                <td>BIBLIOTECA</td>
              </tr>
              <tr>
                <td>0104</td>
                <td>MEDICINA</td>
              </tr>
              <tr>
                <td>0105</td>
                <td>FERIA DE EMPRESAS U.T.N.-F.G.R.P.2019</td>
              </tr>
              <tr>
                <td>0106</td>
                <td>DORMIS</td>
              </tr>
              <tr>
                <td>0107</td>
                <td>MICROESTADIO</td>
              </tr>
              <tr>
                <td>0201</td>
                <td>GENERAL SECRETARIA ACADEMICA</td>
              </tr>
              <tr>
                <td>0202</td>
                <td>GESTION SECRETARIA</td>
              </tr>
              <tr>
                <td>0202</td>
                <td>GESTION SECRETARIA</td>
              </tr>
              <tr>
                <td>0203</td>
                <td>DTO. DE INGRESO</td>
              </tr>
              <tr>
                <td>0204</td>
                <td>4° NIVEL</td>
              </tr>
              <tr>
                <td>0205</td>
                <td>DEPARTAMENTOS</td>
              </tr>
              <tr>
                <td>0206</td>
                <td>LICENCIATURAS</td>
              </tr>
              <!-- Agregar más filas según sea necesario -->
            </tbody>
          </table>
        </div>
    </div>
    <div class="margin-div" >
      <button type="submit" class="btn btn-primary mb-3 custom-button" href="#" data-bs-toggle="modal" data-bs-target="#modalAgregar">Agregar</button>
      <br>
      <button type="submit" class="btn btn-primary mb-3 custom-button">Modificar</button>
      <br>
      <button type="submit" class="btn btn-primary mb-3 custom-button">Eliminar</button>
      <br>
      <button type="submit" class="btn btn-primary mb-3 custom-button">Ver todos</button>
    </div>
  </div>

  <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregar" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <div class="card">
                    <div class="card text-left text-bg-dark">
                        <div class="card-header">
                        &nbsp;&nbsp;&nbsp;SECTORES(AGREGAR)
                        </div>
                        <div class="card-body">

                            <div class="col">
                                <div class="row">
                                    <h5> Datos del Sector</h5>
                                    <label class="col-sm-3 col-form-label">Area</label>
                                    <div class="col-sm-9 ">
                                        <select class="form-select" id="ddlCuenta">
                                            <option value="001">Area 1</option>
                                            <option value="002">Area 2</option>
                                            <option value="003">Area 3</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-3 col-form-label">Código del Sector</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="txtcodigo1"
                                                placeholder="Cód. del Str.">
                                            <input type="text" class="form-control" id="txtcodigo2"
                                                placeholder="Código de Sector" style="width: 350px;">
                                        </div>
                                    </div>

                                    <label class="col-sm-3 col-form-label">Nombre del Sector</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="txtnombre"
                                            placeholder="Nombre del Sector">
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
        var codigoSector1 = $('#txtcodigo1').val();
        var codigoSector2 = $('#txtcodigo2').val();
        var nombreSector = $('#txtnombre').val();

        if (codigoSector1 === '' || codigoSector2 === '' || nombreSector === '') {
            alert("Complete todos los campos");
        } else {

                alert("Sector agregado con éxito");
            }
}
</script>
@endsection
