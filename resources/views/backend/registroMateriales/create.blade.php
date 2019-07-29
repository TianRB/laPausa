@extends('layouts.dashboard')

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
          <p>Create registro_materiales</p>
          <a href=" {{ route('registro_materiales.index')}} ">index</a>
          
          <form action="{{ route('registro_materiales.store') }}" method="post">
            {{ csrf_field() }}
            
            <label for="material_id">material_id</label>
            <input type="text" name="material_id" value="{{ old('material_id') }}">

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ old('area_id') }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">
            
            <label for="cantidad">cantidad</label>
            <input type="number" name="cantidad" value="{{ old('cantidad') }}">
            
            <label for="unidad_medida">unidad_medida</label>
            <input type="text" name="unidad_medida" value="{{ old('unidad_medida') }}">
            
            <label for="precio_total">precio_total</label>
            <input type="text" name="precio_total" value="{{ old('precio_total') }}">
            
            <label for="precio_unitario">precio_unitario</label>
            <input type="text" name="precio_unitario" value="{{ old('precio_unitario') }}">
            
            <label for="fecha_ingreso">fecha_ingreso</label>
            <input type="date" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}">
            
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
