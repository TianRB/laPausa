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
    <form action="{{ route('herr_maq.store') }}" method="post">
      <div class="card text-left">
        <div class="card-body">   
          <h3 class="card-title">Información básica</h3>  
          {{ csrf_field() }}
          
          <div class="form-group px-4">
            <label for="herramienta_id">herramienta_id</label>
            <input class="form-control" type="text" name="herramienta_id" value="{{ old('herramienta_id') }}">
            @if ($errors->has('herramienta_id'))
            <span class="help-block">
              <strong>{{ $errors->first('herramienta_id') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="area_id">area_id</label>
            <input class="form-control" type="text" name="area_id" value="{{ old('area_id') }}">
            @if ($errors->has('area_id'))
            <span class="help-block">
              <strong>{{ $errors->first('area_id') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="trabajador_id">trabajador_id (opcional)</label>
            <input class="form-control" type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">
            @if ($errors->has('trabajador_id'))
            <span class="help-block">
              <strong>{{ $errors->first('trabajador_id') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="cantidad">cantidad</label>
            <input class="form-control" type="number" name="cantidad" value="{{ old('cantidad') }}">
            @if ($errors->has('cantidad'))
            <span class="help-block">
              <strong>{{ $errors->first('cantidad') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="unidad_de_medida">unidad_de_medida</label>
            <input class="form-control" type="text" name="unidad_de_medida" value="{{ old('unidad_de_medida') }}">
            @if ($errors->has('unidad_de_medida'))
            <span class="help-block">
              <strong>{{ $errors->first('unidad_de_medida') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="fecha_alta">fecha_alta</label>
            <input class="form-control" type="date" name="fecha_alta" value="{{ old('fecha_alta') }}">
            @if ($errors->has('fecha_alta'))
            <span class="help-block">
              <strong>{{ $errors->first('fecha_alta') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="fecha_baja">fecha_baja</label>
            <input class="form-control" type="date" name="fecha_baja" value="{{ old('fecha_baja') }}">
            @if ($errors->has('fecha_baja'))
            <span class="help-block">
              <strong>{{ $errors->first('fecha_baja') }}</strong>
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
        <a class="btn bc-bborder btn-lg mr-5" href=" {{ route('herr_maq.index')}}  ">Volver</a>
        <input type="submit" class="btn btn-primary btn-lg bc-primary" value="Crear">
      </div>
    </form>
  </div>
</div>

@endsection

