@extends('layouts.navbarMenu')

@section('title', 'Administracion')
@section('main-title', 'Panel de administrador')
@section('navbar-menu')

<a href="{{url('/administrator/create')}}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Crear</a>
<a href="{{url('administration/update')}}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Modificar</a>
<a href="{{url('/administrator/create')}}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Borrar</a>
<a href="{{url('/administrator/create')}}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Visualizar</a>

<br>

@endsection