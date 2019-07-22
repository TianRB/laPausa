@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        
        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <p>Create mantenimientos y reparaciones</p>
          <a href=" {{ route('mantenimiento_y_reparaciones.index')}} ">index</a>
          
          <form action="{{ route('mantenimiento_y_reparaciones.store') }}" method="post">
            {{ csrf_field() }}

            <label for="herramienta_id">herramienta_id</label>
            <input type="text" name="herramienta_id" value="{{ old('herramienta_id') }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">

            <label for="mantenimiento_o_reparacion">mantenimiento_o_reparacion</label>
            <input type="text" name="mantenimiento_o_reparacion" value="{{ old('mantenimiento_o_reparacion') }}">

            <label for="descripcion_mantenimiento_o_reparacion">descripcion_mantenimiento_o_reparacion</label>
            <input type="text" name="descripcion_mantenimiento_o_reparacion" value="{{ old('descripcion_mantenimiento_o_reparacion') }}">

            <label for="costo_total">costo_total</label>
            <input type="text" name="costo_total" value="{{ old('costo_total') }}">

            <label for="fecha">fecha</label>
            <input type="date" name="fecha" value="{{ old('fecha') }}">

            <label for="notas">notas</label>
            <input type="text" name="notas" value="{{ old('notas') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
