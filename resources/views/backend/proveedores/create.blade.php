 @extends('layouts.dashboard')
@section('page_title')
Crear proveedor
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
    <form action="{{ route('proveedores.store') }}" method="post">
      <div class="card text-left">
        <div class="card-body">   
            <h3 class="card-title">Información básica</h3>  
          {{ csrf_field() }}
          <div class="form-group px-4">
            <label for="display_name">Nombre</label>
            <input type="text" name="display_name" class="form-control" value="{{ old('display_name') }}">
          </div>
          <div class="form-group px-4">            
            <label for="description">description <small>(Opcional)</small></label>
            <input type="text" name="description" class="form-control" value="{{ old('description') }}">
          </div>
          
          <div class="form-group px-4">
            <label for="direccion">direccion</label>
            <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
          </div>

          <div class="form-group px-4">
            <label for="cp">cp</label>
            <input type="text" name="cp" class="form-control" value="{{ old('cp') }}">
          </div>
          
          
        </div>
      </div>
      <div class="row justify-content-end p-5">
          <a class="btn bc-bborder btn-lg mr-5" href=" {{ route('proveedores.index')}} ">Volver</a>
          <input type="submit" class="btn btn-primary btn-lg bc-primary" value="Crear">
      </div>
    </form>
  </div>
</div>

@endsection
