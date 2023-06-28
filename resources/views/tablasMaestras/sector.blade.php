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
</div>
@endsection
