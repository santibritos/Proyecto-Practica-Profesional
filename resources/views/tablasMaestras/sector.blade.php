@extends('index.navbar')

@section('content')
<style>
.background {
    width: 100%;
    height: 1000px;
    background: -webkit-linear-gradient(top right, #7EA8BE, #0388cf);
}

.search-div {
    width: 60%;
    position: relative;
    left: 60px;
    background-color: transparent;
}

.col {
    column-count: 3;
    column-gap: 20px;
}

.btn {
    border: none;
    background-color: #0388cf;
    padding: 7px 20px;
    font-size: 16px;
}

.btn:hover {
    background: #eee;
}

.success {
    color: white;
}

.tabla {
    position: relative;
}

table {
    border-collapse: separate;
    border-spacing: 0;
    min-width: 350px;
}

table tr th,
table tr td {
    border-right: 1px solid #bbb;
    border-bottom: 1px solid #bbb;
    padding: 5px;
}

table tr th:first-child,
table tr td:first-child {
    border-left: 1px solid #bbb;
}

table tr th {
    background: #eee;
    text-align: left;
}

table tr:first-child th:first-child {
    border-top-left-radius: 6px;
}

table tr:first-child {
    border-top-right-radius: 6px;
}

table tr:last-child td:first-child {
    border-bottom-left-radius: 6px;
}

table tr:last-child {
    border-bottom-right-radius: 6px;
}

.div1 {
    float: left;
    height: 330px;
    overflow: auto;
    margin-top: -5px;
}

.div2 {
    float: left;
    position: relative;
    top: 10px;

}

.margin-buttons {

    margin: 20px;
}
</style>
<br>
<br>

<div class="background">
    <br>

    <h1 style="color:#FFFAFA">&nbsp;&nbsp;&nbsp;&nbsp;SECTORES</h1>

    <br>
    <br>

    <div class="search-div">

        <h4>BUSQUEDA</h4>
        <div class="card p-4 " style="background-color : transparent;">
            <div class="col">
                <label class="form-label"><b>Código del sector:</b></label>
                <div>
                    <input type="text" class="form-control" id="txtCodSector">
                </div>
                <div>
                    <button type="submit" class="btn success">Buscar</button>
                </div>
            </div>
            <br>
            <div class="col">
                <label class="form-label"><b>Nombre del sector:</b></label>
                <div>
                    <input type="text" class="form-control" id="txtNameSector">
                </div>
                <div>
                    <button type="submit" class="btn success"> Buscar</button>
                </div>
            </div>
        </div>

        <br>

        <div class="tabla">
            <div class="div1">
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Código del Sector</th>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="div2">
            <div class="margin-buttons"><button type="submit" class="btn success">Agregar</button> </div>
            <div class="margin-buttons"><button type="submit" class="btn success">Modificar</button> </div>
            <div class="margin-buttons"> <button type="submit" class="btn success">Eliminar</button> </div>
            <div class="margin-buttons"> <button type="submit" class="btn success">Ver todos</button></div>
            <div class="margin-buttons"> <button type="submit" class="btn success">Cerrar</button> </div>
        </div>

    </div>

    @endsection