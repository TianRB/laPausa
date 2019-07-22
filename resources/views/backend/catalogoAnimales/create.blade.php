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
            <label for="especie">especie</label>
            <input class="form-control" type="text" name="especie" value="{{ old('especie') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="raza">raza</label>
            <input class="form-control" type="text" name="raza" value="{{ old('raza') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="nombre_cientifico">nombre_cientifico</label>
            <input class="form-control" type="text" name="nombre_cientifico" value="{{ old('nombre_cientifico') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="nombre_comercial">nombre_comercial</label>
            <input class="form-control" type="text" name="nombre_comercial" value="{{ old('nombre_comercial') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="dias_gestacion">dias_gestacion</label>
            <input class="form-control" type="text" name="dias_gestacion" value="{{ old('dias_gestacion') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="ciclo_celo">ciclo_celo</label>
            <input class="form-control" type="text" name="ciclo_celo" value="{{ old('ciclo_celo') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="dias_lactacion">dias_lactacion</label>
            <input class="form-control" type="text" name="dias_lactacion" value="{{ old('dias_lactacion') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="alimentacion">alimentacion</label>
            <input class="form-control" type="text" name="alimentacion" value="{{ old('alimentacion') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="productos">productos</label>
            <input class="form-control" type="text" name="productos" value="{{ old('productos') }}">
            @if ($errors->has('total_superficie_productiva'))
            <span class="help-block">
              <strong>{{ $errors->first('total_superficie_productiva') }}</strong>
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
          <p>Create Catalogo Animales</p>
          <a href=" {{ route('catalogo_animales.index')}} ">index</a>
          
          <form action="{{ route('catalogo_animales.store') }}" method="post">
            {{ csrf_field() }}
            
            
            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
