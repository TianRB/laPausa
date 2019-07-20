 @extends('layouts.dashboard')
 
 @section('page_title')
 Create Biocamas
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
    <form action="{{ route('enfermedades_y_plagas.store') }}" method="post">
      <div class="card text-left">
        <div class="card-body">   
          <h3 class="card-title">Información básica</h3>  
          {{ csrf_field() }}
          <div class="form-group px-4">
            
          </div>
          
          <div class="form-group px-4">
            <label for="display_name">Nombre</label>
            <input type="text" name="display_name"  class="form-control" value="{{ old('display_name') }}">
          </div>   
          <div class="form-group px-4">
            <label for="description">Descripción <small>()opcional)</small></label>
            <input type="text" name="description"  class="form-control" value="{{ old('description') }}">
          </div>   
          <div class="form-group px-4">
            <label for="area_id">Id de Área</label>
            <input type="text" name="area_id"  class="form-control" value="{{ old('area_id') }}">
          </div>   
          <div class="form-group px-4">
            <label for="largo">Largo (mts)</label>
            <input type="text" name="largo"  class="form-control" value="{{ old('largo') }}">
          </div>   
          <div class="form-group px-4">
            <label for="ancho">Ancho (mts)</label>
            <input type="text" name="ancho"  class="form-control" value="{{ old('ancho') }}">
          </div>   
          <div class="form-group px-4">
            <label for="ancho_pasillos_biocama">Ancho pasillos de biocama</label>
            <input type="text" name="ancho_pasillos_biocama"  class="form-control" value="{{ old('ancho_pasillos_biocama') }}">          
          </div>
        </div>
      </div>
        <div class="row justify-content-end p-5">
          <a class="btn bc-bborder btn-lg mr-5" href=" {{ route('biocamas.index')}} ">Volver</a>
          <input type="submit" class="btn btn-primary btn-lg bc-primary" value="Crear">
        </div>
      </form>
    </div>
  </div>
  
  @endsection
