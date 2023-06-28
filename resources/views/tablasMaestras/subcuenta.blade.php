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
                        <label  class="col-sm-4 col-form-label">Codigo de Subcuenta</label>
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
                        <label  class="col-sm-4 col-form-label">Nombre de Subcuenta</label>
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
    <div class="margin-div" >
      
         <button type="submit" class="btn btn-primary mb-3 custom-button">Agregar</button>
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
