 @extends('layouts.dashboard')
 @section('page_title')
 Crear Áreas
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
            <label for="trabajador_id">Trabajador</label>
            <input class="form-control" type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">
            @if ($errors->has('trabajador_id'))
            <span class="help-block">
                <strong>{{ $errors->first('trabajador_id') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4"> 
            <label for="trabajadores_aux">Trabajadores auxiliares</label>
            <input class="form-control" type="text" name="trabajadores_aux" value="{{ old('trabajadores_aux') }}">
            @if ($errors->has('trabajadores_aux'))
            <span class="help-block">
                <strong>{{ $errors->first('trabajadores_aux') }}</strong>
            </span>
            @endif
          </div> 
          <div class="form-group px-4"> 
            <label for="numero_biocamas">Número de biocamas</label>
            <input class="form-control" type="text" name="numero_biocamas" value="{{ old('numero_biocamas') }}">
            @if ($errors->has('numero_biocamas'))
            <span class="help-block">
                <strong>{{ $errors->first('numero_biocamas') }}</strong>
            </span>
            @endif
          </div>
          <div class="form-group px-4">
            <label for="total_superficie_productiva">Superficie total productiva</label>
            <input class="form-control" type="text" name="total_superficie_productiva" value="{{ old('total_superficie _productiva') }}">
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

