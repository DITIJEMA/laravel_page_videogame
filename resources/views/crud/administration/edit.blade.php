@extends('layouts.navbarMenu')

@section('title', 'Administracion')
@section('main-title', 'Modificacion de administrador')
@section('navbar-menu')

  <form class="p-4 needs-validation" action="" method="POST" novalidate>
    <input type="hidden" name="opcion" value="2">
    <input type="hidden" name="id" value="">

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="id_usuario">ID USUARIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="id_usuario" value="" readonly>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="salario">SALARIO</label>
        <input type="number" class="form-control" id="validationCustom02" name="salario" value="" required>
        <div class="valid-feedback">Registro corecto</div>
        <div class="invalid-feedback">Hay un error revice por favor</div>
      </div>

        <div class="col-md-3 mb-3">
          <label for="fecha_contratacion">FECHA DE CONTRATACION</label>
          <input type="date" class="form-control" id="validationCustom02" name="fecha_contratacion" value="" required>
          <div class="valid-feedback">Registro corecto</div>
          <div class="invalid-feedback">Hay un error revice por favor</div>
        </div>
      </div>

    <div class="col-md-3 mb-3">
      <button type="submit" class=" btn btn-primary w-100 fs-5">Editar</button>
    </div>
  </form>

  @endsection