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
          <p>Create Inventario Materiales</p>
          <a href=" {{ route('inventario_materiales.index')}} ">index</a>
          
          <form action="{{ route('inventario_materiales.store') }}" method="post">
            {{ csrf_field() }}
            
            <label for="material_id">material_id</label>
            <input type="text" name="material_id" value="{{ old('material_id') }}">

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ old('area_id') }}">

            <label for="cantidad">cantidad</label>
            <input type="number" name="cantidad" value="{{ old('cantidad') }}">
            
            <label for="unidad_medida">unidad_medida</label>
            <input type="text" name="unidad_medida" value="{{ old('unidad_medida') }}">
            
            <label for="fecha_alta">fecha_alta</label>
            <input type="date" name="fecha_alta" value="{{ old('fecha_alta') }}">
            
            <label for="notificaciones">notificaciones</label>
            <input type="text" name="notificaciones" value="{{ old('notificaciones') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
