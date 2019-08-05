 @extends('layouts.dashboard')
 @section('page_title')
 Añadir animales
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
    <form action="{{ route('areas.store') }}" method="post">
      <div class="card text-left">
        <div class="card-body">   
          <h3 class="card-title">Información básica</h3>  
          {{ csrf_field() }}
          
          <div class="form-group px-4">
            <label for="animal_id">Id del catálogo</label>
            <input class="form-control" type="text" name="animal_id" value="{{ old('animal_id') }}">
            @if ($errors->has('animal_id'))
            <span class="help-block">
              <strong>{{ $errors->first('animal_id') }}</strong>
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
            <label for="display_name">display_name</label>
            <input class="form-control" type="text" name="display_name" value="{{ old('display_name') }}">
            @if ($errors->has('display_name'))
            <span class="help-block">
              <strong>{{ $errors->first('display_name') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="description">description</label>
            <input class="form-control" type="text" name="description" value="{{ old('description') }}">
            @if ($errors->has('description'))
            <span class="help-block">
              <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="sexo">sexo</label>
            <input class="form-control" type="text" name="sexo" value="{{ old('sexo') }}">
            @if ($errors->has('sexo'))
            <span class="help-block">
              <strong>{{ $errors->first('sexo') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="fecha_nac">fecha_nac</label>
            <input class="form-control" type="date" name="fecha_nac" value="{{ old('fecha_nac') }}">
            @if ($errors->has('fecha_nac'))
            <span class="help-block">
              <strong>{{ $errors->first('fecha_nac') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="padres">padres</label>
            <input class="form-control" type="text" name="padres" value="{{ old('padres') }}">
            @if ($errors->has('padres'))
            <span class="help-block">
              <strong>{{ $errors->first('padres') }}</strong>
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
            <label for="tiempo_consumido">tiempo_consumido</label>
            <input class="form-control" type="text" name="tiempo_consumido" value="{{ old('tiempo_consumido') }}">
            @if ($errors->has('tiempo_consumido'))
            <span class="help-block">
              <strong>{{ $errors->first('tiempo_consumido') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="peso">peso</label>
            <input class="form-control" type="text" name="peso" value="{{ old('peso') }}">
            @if ($errors->has('peso'))
            <span class="help-block">
              <strong>{{ $errors->first('peso') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="racion_alimento">racion_alimento</label>
            <input class="form-control" type="text" name="racion_alimento" value="{{ old('racion_alimento') }}">
            @if ($errors->has('racion_alimento'))
            <span class="help-block">
              <strong>{{ $errors->first('racion_alimento') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="unidad_medida">unidad_medida</label>
            <input class="form-control" type="text" name="unidad_medida" value="{{ old('unidad_medida') }}">
            @if ($errors->has('unidad_medida'))
            <span class="help-block">
              <strong>{{ $errors->first('unidad_medida') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="costo">costo</label>
            <input class="form-control" type="text" name="costo" value="{{ old('costo') }}">
            @if ($errors->has('costo'))
            <span class="help-block">
              <strong>{{ $errors->first('costo') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="preventivos">preventivos</label>
            <input class="form-control" type="text" name="preventivos" value="{{ old('preventivos') }}">
            @if ($errors->has('preventivos'))
            <span class="help-block">
              <strong>{{ $errors->first('preventivos') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="enfermedades">enfermedades</label>
            <input class="form-control" type="text" name="enfermedades" value="{{ old('enfermedades') }}">
            @if ($errors->has('enfermedades'))
            <span class="help-block">
              <strong>{{ $errors->first('enfermedades') }}</strong>
            </span>
            @endif          
          </div>
          
          <div class="form-group px-4">
            <label for="vacunas">vacunas</label>
            <input class="form-control" type="text" name="vacunas" value="{{ old('vacunas') }}">
            @if ($errors->has('vacunas'))
            <span class="help-block">
              <strong>{{ $errors->first('vacunas') }}</strong>
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
        <a class="btn bc-bborder btn-lg mr-5" href=" {{ route('areas.index')}} ">Volver</a>
        <input type="submit" class="btn btn-primary btn-lg bc-primary" value="Crear">
      </div>
    </form>
  </div>
</div>

@endsection


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
          <p>Create Animales</p>
          <a href=" {{ route('animales.index')}} ">index</a>
          
          <form action="{{ route('animales.store') }}" method="post">
            {{ csrf_field() }}
            
            
            
            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
