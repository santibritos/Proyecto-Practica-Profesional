@extends('index.navbar')

@section('content')

<br>
<br>


<div class="lineal">

    <h1>Areas</h1>





<div class="probando">
  <fieldset>
        <legend>Busqueda</legend>
        <div class="card p-4 " style="background: -webkit-linear-gradient(top right, #7EA8BE, #0388cf);">
        
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Codigo de Area</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtcodigo" placeholder="Codigo de Area">
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
                        <label  class="col-sm-4 col-form-label">Nombre de Area</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="txtnombre" placeholder="Nombre de Area">
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
                            <th scope="col">Código de Área</th>
                            <th scope="col">Nombre del Área</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Área 1</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Área 2</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Área 3</td>
                        </tr>
                        <tr>
                            <td>004</td>
                            <td>Área 4</td>
                        </tr>
                        <tr>
                            <td>005</td>
                            <td>Área 5</td>
                        </tr>
                        <tr>
                            <td>006</td>
                            <td>Área 6</td>
                        </tr>
                        <!-- Agregar más filas según sea necesario -->
                    </tbody>
                </table>
            </div>
    </div>
    <div class="margin-div" >
      
        
        
        <button type="submit" class="btn btn-primary mb-3 custom-button" id="btn-agregar" data-bs-toggle="modal" data-bs-target="#modalAgregar">Agregar</button>
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
              Datos del Area
            </div>
            <div class="card-body">
              <div class="col">
                <div class="row">
                  <label class="col-sm-3 col-form-label">Codigo del Area</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="txtCodArea" placeholder="Codigo de Area">
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">Nombre del Area</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="txtNombre" placeholder="Nombre de Area">
                  </div>
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

<script>
  function cerrarVentana() {
    $('#modalAgregar').modal('toggle');
  }

  function agregar() {
        var codigoArea = $('#txtCodArea').val();
        var nombreArea = $('#txtNombre').val();

        if (codigoArea === '' || nombreArea === '') {
            alert("Complete todos los campos");
        } else {
                alert("Área agregada con éxito");
            }
}
</script>
@endsection
