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
          <p>Edit registro_materiales</p>
          <a href=" {{ route('registro_materiales.index')}} ">index</a>
          
          <form action="{{ route('registro_materiales.update', $registroMaterial->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="material_id">material_id</label>
            <input type="text" name="material_id" value="{{ $registroMaterial->material_id }}">
            
            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ $registroMaterial->area_id }}">
            
            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ $registroMaterial->trabajador_id }}">
            
            <label for="cantidad">cantidad</label>
            <input type="number" name="cantidad" value="{{ $registroMaterial->cantidad }}">
            
            <label for="unidad_medida">unidad_medida</label>
            <input type="text" name="unidad_medida" value="{{ $registroMaterial->unidad_medida }}">
            
            <label for="precio_total">precio_total</label>
            <input type="text" name="precio_total" value="{{ $registroMaterial->precio_total }}">
            
            <label for="precio_unitario">precio_unitario</label>
            <input type="text" name="precio_unitario" value="{{ $registroMaterial->precio_unitario }}">
            
            <label for="fecha_ingreso">fecha_ingreso</label>
            <input type="date" name="fecha_ingreso" value="{{ $registroMaterial->fecha_ingreso }}">
            
            <label for="notas">notas</label>
            <input type="text" name="notas" value="{{ $registroMaterial->notas }}">
            
            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
