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
          <p>Edit mantenimientos y reparaciones</p>
          <a href=" {{ route('mantenimiento_y_reparaciones.index')}} ">index</a>
          
          <form action="{{ route('mantenimiento_y_reparaciones.update', $mantenimientoReparacion->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />
            
            <label for="herramienta_id">herramienta_id</label>
            <input type="text" name="herramienta_id" value="{{ $mantenimientoReparacion->herramienta_id }}">
            
            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ $mantenimientoReparacion->trabajador_id }}">
            
            <label for="mantenimiento_o_reparacion">mantenimiento_o_reparacion</label>
            <input type="text" name="mantenimiento_o_reparacion" value="{{ $mantenimientoReparacion->mantenimiento_o_reparacion }}">
            
            <label for="descripcion_mantenimiento_o_reparacion">descripcion_mantenimiento_o_reparacion</label>
            <input type="text" name="descripcion_mantenimiento_o_reparacion" value="{{ $mantenimientoReparacion->descripcion_mantenimiento_o_reparacion }}">
            
            <label for="costo_total">costo_total</label>
            <input type="text" name="costo_total" value="{{ $mantenimientoReparacion->costo_total }}">
            
            <label for="fecha">fecha</label>
            <input type="date" name="fecha" value="{{ $mantenimientoReparacion->fecha }}">
            
            <label for="notas">notas</label>
            <input type="text" name="notas" value="{{ $mantenimientoReparacion->notas }}">
            
            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
