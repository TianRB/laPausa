 @extends('layouts.dashboard')

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
          <p>Edit catalogo_insumos</p>
          <a href=" {{ route('catalogo_insumos.index')}} ">index</a>
          
          <form action="{{ route('catalogo_insumos.update', $catalogoInsumo->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ $catalogoInsumo->display_name }}">
            
            <label for="description">description (optional)</label>
            <input type="text" name="description" value="{{ $catalogoInsumo->description }}">
            
            <label for="unidad_medida">unidad_medida</label>
            <input type="text" name="unidad_medida" value="{{ $catalogoInsumo->unidad_medida }}">
            
            <label for="procedimientos">procedimientos</label>
            <input type="text" name="procedimientos" value="{{ $catalogoInsumo->procedimientos }}">
            
            <label for="datos">datos</label>
            <input type="text" name="datos" value="{{ $catalogoInsumo->datos }}">
            
            <label for="costo">costo</label>
            <input type="text" name="costo" value="{{ $catalogoInsumo->costo }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
