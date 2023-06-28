@extends('index.plantilla')
@section('content1')
<div class="menu_wrapper">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">  
    <a class="navbar-brand" style="color:white" href="/menu">SACC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Archivo
          </a>
          <ul class="dropdown-menu active">
            <li><a class="dropdown-item" href="#">Exportar listados</a></li>
            <li><a class="dropdown-item" href="#">Configurar impresoras</a></li>
            <li><a class="dropdown-item" href="#">Opciones</a></li>
            <li><a class="dropdown-item" href="/login">Cerrar sesion</a></li>
            <li><a class="dropdown-item" href="/login">Salir</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Personas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Alumnos</a></li>
            <li><a class="dropdown-item" href="#">Profesores</a></li>
            <li><a class="dropdown-item" href="#">Clientes</a></li>
            <li><a class="dropdown-item" href="#">Proveedores</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tablas Maestras
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/carreras">Carreras</a></li>
            <li><a class="dropdown-item" href="#">Tipos de Monedas</a></li>
            <li><a class="dropdown-item" href="#">Tipos de Gastos</a></li>
            <li><a class="dropdown-item" href="#">Subtipos de Gastos</a></li>
            <li><a class="dropdown-item" href="/area">Areas</a></li>
            <li><a class="dropdown-item" href="/sector">Sectores</a></li>
            <li><a class="dropdown-item" href="/cuenta">Cuentas</a></li>
            <li><a class="dropdown-item" href="/subcuenta">Sub-Cuentas</a></li>
            <li><a class="dropdown-item" href="#">Localidades</a></li>
            <li><a class="dropdown-item" href="#">Provincias</a></li>
            <li><a class="dropdown-item" href="#">Tarjetas de Crédito/Débito</a></li>
            <li><a class="dropdown-item" href="#">Bancos</a></li>
            <li><a class="dropdown-item" href="#">Cuentas Bancarias</a></li>
            <li><a class="dropdown-item" href="#">Intereses</a></li>
            <li><a class="dropdown-item" href="#">Cotizaciones de Monedas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ingresos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Factura Contado</a></li>
            <li><a class="dropdown-item" href="#">Factura Cta.Cte.</a></li>
            <li><a class="dropdown-item" href="#">Nota de Credito</a></li>
            <li><a class="dropdown-item" href="#">Nota de Debito</a></li>
            <li><a class="dropdown-item" href="#">Recibo</a></li>
            <li><a class="dropdown-item" href="#">Pago Fácil - Generar Comprobante</a></li>
            <li><a class="dropdown-item" href="#">Pago Fácil - Cargar Archivo de Pagos</a></li>
            <li><a class="dropdown-item" href="#">Pago Fácil - Generar Factura</a></li>
            <li><a class="dropdown-item" href="#">Mercado Pago - Generar Factura</a></li>
            <li><a class="dropdown-item" href="#">Comprobantes</a></li>
            <li><a class="dropdown-item" href="#">Debito Manual</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Egresos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Factura Contado</a></li>
            <li><a class="dropdown-item" href="#">Factura Cta.Cte.</a></li>
            <li><a class="dropdown-item" href="#">Orden de Pago</a></li>
            <li><a class="dropdown-item" href="#">Nota de Debito</a></li>
            <li><a class="dropdown-item" href="#">Vales de caja</a></li>
            <li><a class="dropdown-item" href="#">Comprobantes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gestion Financiera
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Movimientos de Cajas y Bancos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Caja Diaria (Ingresos)</a></li>
            <li><a class="dropdown-item" href="#">Caja Chica (Egresos)</a></li>
            <li><a class="dropdown-item" href="#">Estado de Cuenta (Alumno - Cliente - Preveedor)</a></li>
            <li><a class="dropdown-item" href="#">Estado de Subcuenta (Ingreso - Egreso)</a></li>
            <li><a class="dropdown-item" href="#">Estado de Subcuenta (BID)</a></li>
            <li><a class="dropdown-item" href="#">Gastos por Subcuentas</a></li>
            <li><a class="dropdown-item" href="#">Listado de Personas</a></li>
            <li><a class="dropdown-item" href="#">Listado de Subcuentas</a></li>
            <li><a class="dropdown-item" href="#">Listado de Comprobantes (Comp - Rete - Ncre)</a></li>
            <li><a class="dropdown-item" href="#">Pago Fácil - Comprobantes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Seguridad
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Usuarios</a></li>
            <li><a class="dropdown-item" href="#">Passwords</a></li>
            <li><a class="dropdown-item" href="#">Registros de Operaciones</a></li>
            <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" aria-expanded="false">
            Ayuda
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">?</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

</div>
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
@yield('content')
@endsection