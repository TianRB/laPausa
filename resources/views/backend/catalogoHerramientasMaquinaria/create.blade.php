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
    <form action="{{ route('cat_herr_maq.store') }}" method="post">
      <div class="card text-left">
        <div class="card-body">   
          <h3 class="card-title">Información básica</h3>  
          {{ csrf_field() }}
          
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
            <label for="tipo">tipo (Maquinaria | Herramienta)</label>
            <input class="form-control" type="text" name="tipo" value="{{ old('tipo') }}">
            @if ($errors->has('tipo'))
            <span class="help-block">
              <strong>{{ $errors->first('tipo') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="marca">marca</label>
            <input class="form-control" type="text" name="marca" value="{{ old('marca') }}">
            @if ($errors->has('marca'))
            <span class="help-block">
              <strong>{{ $errors->first('marca') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="modelo">modelo</label>
            <input class="form-control" type="text" name="modelo" value="{{ old('modelo') }}">
            @if ($errors->has('modelo'))
            <span class="help-block">
              <strong>{{ $errors->first('modelo') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="datos">datos (json)</label>
            <input class="form-control" type="text" name="datos" value="{{ old('datos') }}">
            @if ($errors->has('datos'))
            <span class="help-block">
              <strong>{{ $errors->first('datos') }}</strong>
            </span>
            @endif
          </div>
 
        </div>
      </div>
      <div class="row justify-content-end p-5">
        <a class="btn bc-bborder btn-lg mr-5" href=" {{ route('cat_herr_maq.index')}} ">Volver</a>
        <input type="submit" class="btn btn-primary btn-lg bc-primary" value="Crear">
      </div>
    </form>
  </div>
</div>

@endsection

