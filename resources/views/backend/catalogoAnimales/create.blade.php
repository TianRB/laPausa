 @extends('layouts.dashboard')
 @section('page_title')
 Añadir Animales al Catálogo
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
    <form action="{{ route('catalogo_animales.store') }}" method="post">
      <div class="card text-left">
        <div class="card-body">   
          <h3 class="card-title">Información básica</h3>  
          {{ csrf_field() }}
          <div class="form-group px-4">
            <label for="especie">Especie</label>
            <input class="form-control" type="text" name="especie" value="{{ old('especie') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="raza">Raza</label>
            <input class="form-control" type="text" name="raza" value="{{ old('raza') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="nombre_cientifico">Nombre científico</label>
            <input class="form-control" type="text" name="nombre_cientifico" value="{{ old('nombre_cientifico') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="nombre_comercial">Nombre comercial</label>
            <input class="form-control" type="text" name="nombre_comercial" value="{{ old('nombre_comercial') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="dias_gestacion">Días de gestación</label>
            <input class="form-control" type="text" name="dias_gestacion" value="{{ old('dias_gestacion') }}">
            @if ($errors->has('dias_gestacion'))
            <span class="help-block">
              <strong>{{ $errors->first('dias_gestacion') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="ciclo_celo">Ciclo de celo</label>
            <input class="form-control" type="text" name="ciclo_celo" value="{{ old('ciclo_celo') }}">
            @if ($errors->has('ciclo_celo'))
            <span class="help-block">
              <strong>{{ $errors->first('ciclo_celo') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="dias_lactacion">Dias de lactacion</label>
            <input class="form-control" type="text" name="dias_lactacion" value="{{ old('dias_lactacion') }}">
            @if ($errors->has('dias_lactacion'))
            <span class="help-block">
              <strong>{{ $errors->first('dias_lactacion') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="alimentacion">Alimentacion</label>
            <input class="form-control" type="text" name="alimentacion" value="{{ old('alimentacion') }}">
            @if ($errors->has('alimentacion'))
            <span class="help-block">
              <strong>{{ $errors->first('alimentacion') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="productos">Productos</label>
            <input class="form-control" type="text" name="productos" value="{{ old('productos') }}">
            @if ($errors->has('productos'))
            <span class="help-block">
              <strong>{{ $errors->first('productos') }}</strong>
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