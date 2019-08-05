@extends('layouts.dashboard')

@section('page_title')
Create herramienta y maquinaria
@endsection


@section('content')
@if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif
<div class="row py-3">
  <div class="col-12">
    <h1 class="">@yield('page_title')</h1>
  </div>
</div>
<div class="row">
  <div class="col-6">
    <form action="{{ route('registro_materiales.store') }}" method="post">
      <div class="card text-left">
        <div class="card-body">   
          <h3 class="card-title">Información básica</h3>  
          {{ csrf_field() }}
          <div class="form-group px-4">                      
            <label for="material_id">material_id</label>
            <input class="form-control" type="text" name="material_id" value="{{ old('material_id') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          <div class="form-group px-4">
            <label for="area_id">area_id</label>
            <input class="form-control" type="text" name="area_id" value="{{ old('area_id') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          <div class="form-group px-4">
            <label for="trabajador_id">trabajador_id</label>
            <input class="form-control" type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          <div class="form-group px-4">
            <label for="cantidad">cantidad</label>
            <input class="form-control" type="number" name="cantidad" value="{{ old('cantidad') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          <div class="form-group px-4">
            <label for="unidad_medida">unidad_medida</label>
            <input class="form-control" type="text" name="unidad_medida" value="{{ old('unidad_medida') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          <div class="form-group px-4">
            <label for="precio_total">precio_total</label>
            <input class="form-control" type="text" name="precio_total" value="{{ old('precio_total') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          <div class="form-group px-4">
            <label for="precio_unitario">precio_unitario</label>
            <input class="form-control" type="text" name="precio_unitario" value="{{ old('precio_unitario') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          <div class="form-group px-4">
            <label for="fecha_ingreso">fecha_ingreso</label>
            <input class="form-control" type="date" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          <div class="form-group px-4">
            <label for="notas">notas</label>
            <input class="form-control" type="text" name="notas" value="{{ old('notas') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>  
          
                    
          
          
        </div>
      </div>
      <div class="row justify-content-end p-5">
        <a class="btn bc-bborder btn-lg mr-5" href=" {{ route('registro_materiales.index')}}  ">Volver</a>
        <input type="submit" class="btn btn-primary btn-lg bc-primary" value="Crear">
      </div>
    </form>
  </div>
</div>

@endsection
