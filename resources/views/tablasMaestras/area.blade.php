@extends('index.navbar')

@section('content')
<style>
  .lineal {
    width: 100%;
    height:1000px;
    background: -webkit-linear-gradient(top right, #7EA8BE, #0388cf);  
  }

   .container {
        display: flex;
        justify-content: space-between;
    }

    .container > div {
        width: 50%;
    }
    .probando {
        width: 90%;
        margin: 50px; 
    }
    .custom-button {
        width: 200px; 
    }
    .margin-div{
      margin:20px;
    }
</style>
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
                            <input type="text" class="form-control" id="txtcodigo" placeholder="codigo de area">
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