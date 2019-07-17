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
          <p>Create Catalogo Animales</p>
          <a href=" {{ route('catalogo_animales.index')}} ">index</a>
          
          <form action="{{ route('catalogo_animales.store') }}" method="post">
            {{ csrf_field() }}
            <label for="especie">especie</label>
            <input type="text" name="especie" value="{{ old('especie') }}">

            <label for="raza">raza</label>
            <input type="text" name="raza" value="{{ old('raza') }}">

            <label for="nombre_cientifico">nombre_cientifico</label>
            <input type="text" name="nombre_cientifico" value="{{ old('nombre_cientifico') }}">

            <label for="nombre_comercial">nombre_comercial</label>
            <input type="text" name="nombre_comercial" value="{{ old('nombre_comercial') }}">

            <label for="dias_gestacion">dias_gestacion</label>
            <input type="text" name="dias_gestacion" value="{{ old('dias_gestacion') }}">

            <label for="ciclo_celo">ciclo_celo</label>
            <input type="text" name="ciclo_celo" value="{{ old('ciclo_celo') }}">

            <label for="dias_lactacion">dias_lactacion</label>
            <input type="text" name="dias_lactacion" value="{{ old('dias_lactacion') }}">

            <label for="alimentacion">alimentacion</label>
            <input type="text" name="alimentacion" value="{{ old('alimentacion') }}">

            <label for="productos">productos</label>
            <input type="text" name="productos" value="{{ old('productos') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
