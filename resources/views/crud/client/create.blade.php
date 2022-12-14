@extends('layouts.navbarMenu')

@section('title', 'Cliente')
@section('main-title', 'Creacion de cliente')
@section('navbar-menu')
  <form method="get" action="" class="row g-3 needs-validation" novalidate>
    <input type="hidden" value="1" name="opcion">

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id_usuario">ID USUARIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="id_usuario" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="dinero">DINERO</label>
        <input type="number" class="form-control" id="validationCustom02" name="dinero">
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <button type="submit" class=" btn btn-primary w-100 fs-5">Registrar</button>
      </div>
  </form>
@endsection