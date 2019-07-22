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
          <p>Edit Cat Materiales</p>
          <a href=" {{ route('inventario_materiales.index')}} ">index</a>
          
          <form action="{{ route('inventario_materiales.update', $inventarioMaterial->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />
            
            <label for="material_id">material_id</label>
            <input type="text" name="material_id" value="{{ $inventarioMaterial->material_id }}">
            
            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ $inventarioMaterial->area_id }}">
            
            <label for="cantidad">cantidad</label>
            <input type="number" name="cantidad" value="{{ $inventarioMaterial->cantidad }}">
            
            <label for="unidad_medida">unidad_medida</label>
            <input type="text" name="unidad_medida" value="{{ $inventarioMaterial->unidad_medida }}">
            
            <label for="fecha_alta">fecha_alta</label>
            <input type="date" name="fecha_alta" value="{{ $inventarioMaterial->fecha_alta }}">
            
            <label for="notificaciones">notificaciones</label>
            <input type="text" name="notificaciones" value="{{ $inventarioMaterial->notificaciones }}">
            
            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
