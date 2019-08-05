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
    <form action="{{ route('registro_combustible.store') }}" method="post">
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
            <label for="trabajador_id">trabajador_id</label>
            <input class="form-control" type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">
            @if ($errors->has('trabajador_id'))
            <span class="help-block">
              <strong>{{ $errors->first('trabajador_id') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="litros_cargados">litros_cargados</label>
            <input class="form-control" type="text" name="litros_cargados" value="{{ old('litros_cargados') }}">
            @if ($errors->has('litros_cargados'))
            <span class="help-block">
              <strong>{{ $errors->first('litros_cargados') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="costo_litro">costo_litro</label>
            <input class="form-control" type="number" name="costo_litro" value="{{ old('costo_litro') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="odometro_u_horas">odometro_u_horas</label>
            <input class="form-control" type="text" name="odometro_u_horas" value="{{ old('odometro_u_horas') }}">
            @if ($errors->has('notas'))
            <span class="help-block">
              <strong>{{ $errors->first('notas') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="fecha">fecha</label>
            <input class="form-control" type="date" name="fecha" value="{{ old('fecha') }}">
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
        <a class="btn bc-bborder btn-lg mr-5" href=" {{ route('registro_combustible.index')}}  ">Volver</a>
        <input type="submit" class="btn btn-primary btn-lg bc-primary" value="Crear">
      </div>
    </form>
  </div>
</div>

@endsection
