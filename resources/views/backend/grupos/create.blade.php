 @extends('layouts.dashboard')
 @section('page_title')
 Crear Grupos
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
    <form action="{{ route('grupos.store') }}" method="post">
      <div class="card text-left">
        <div class="card-body">   
          <h3 class="card-title">Información básica</h3>  
          {{ csrf_field() }}
          <div class="form-group px-4"> 
            <label for="display_name">Nombre</label>
            <input class="form-control" type="text" name="display_name" value="{{ old('display_name') }}">
            @if ($errors->has('display_name'))
            <span class="help-block">
              <strong>{{ $errors->first('display_name') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4"> 
            <label for="description">Descripción <small>(Opcional)</small></label>
            <input class="form-control" type="text" name="description" value="{{ old('description') }}">
            @if ($errors->has('description'))
            <span class="help-block">
              <strong>{{ $errors->first('description') }}</strong>
            </span>
            @endif
          </div>
          
          <div class="form-group px-4"> 
            <label for="distancia_entre_arboles">Distancia entre árboles</label>
            <input class="form-control" type="text" name="distancia_entre_arboles" value="{{ old('distancia_entre_arboles') }}">
            @if ($errors->has('distancia_entre_arboles'))
            <span class="help-block">
              <strong>{{ $errors->first('distancia_entre_arboles') }}</strong>
            </span>
            @endif
          </div>
          
          <div class="form-group px-4"> 
            <label for="rango_de_edad">Rango de edad</label>
            <input class="form-control" type="text" name="rango_de_edad" value="{{ old('rango_de_edad') }}">
            @if ($errors->has('rango_de_edad'))
            <span class="help-block">
              <strong>{{ $errors->first('rango_de_edad') }}</strong>
            </span>
            @endif
          </div>
          
          <div class="form-group px-4"> 
            <label for="enfermedades_o_plagas">Enfermedades o plagas NOTA ESTA ES LLAVE FORANEA</label>
            <input class="form-control" type="text" name="enfermedades_o_plagas" value="{{ old('enfermedades_o_plagas') }}">
            @if ($errors->has('enfermedades_o_plagas'))
            <span class="help-block">
              <strong>{{ $errors->first('enfermedades_o_plagas') }}</strong>
            </span>
            @endif
          </div>
          
          
        </div>
      </div>
      <div class="row justify-content-end p-5">
        <a class="btn bc-bborder btn-lg mr-5" href=" {{ route('grupos.index')}} ">Volver</a>
        <input type="submit" class="btn btn-primary btn-lg bc-primary" value="Crear">
      </div>
    </form>
  </div>
</div>

@endsection