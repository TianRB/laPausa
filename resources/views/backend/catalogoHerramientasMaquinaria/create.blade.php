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
          <p>Create catalogo herramienta y maquinaria</p>
          <a href=" {{ route('cat_herr_maq.index')}} ">index</a>
          
          <form action="{{ route('cat_herr_maq.store') }}" method="post">
            {{ csrf_field() }}

            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ old('display_name') }}">

            <label for="description">description</label>
            <input type="text" name="description" value="{{ old('description') }}">

            <label for="tipo">tipo (Maquinaria | Herramienta)</label>
            <input type="text" name="tipo" value="{{ old('tipo') }}">

            <label for="marca">marca</label>
            <input type="text" name="marca" value="{{ old('marca') }}">

            <label for="modelo">modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}">

            <label for="datos">datos (json)</label>
            <input type="text" name="datos" value="{{ old('datos') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
