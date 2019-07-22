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
          <p>Create registro de combustible</p>
          <a href=" {{ route('registro_combustible.index')}} ">index</a>
          
          <form action="{{ route('registro_combustible.store') }}" method="post">
            {{ csrf_field() }}

            <label for="herramienta_id">herramienta_id</label>
            <input type="text" name="herramienta_id" value="{{ old('herramienta_id') }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">

            <label for="litros_cargados">litros_cargados</label>
            <input type="text" name="litros_cargados" value="{{ old('litros_cargados') }}">

            <label for="costo_litro">costo_litro</label>
            <input type="number" name="costo_litro" value="{{ old('costo_litro') }}">

            <label for="odometro_u_horas">odometro_u_horas</label>
            <input type="text" name="odometro_u_horas" value="{{ old('odometro_u_horas') }}">

            <label for="fecha">fecha</label>
            <input type="date" name="fecha" value="{{ old('fecha') }}">

            <label for="notas">notas</label>
            <input type="text" name="notas" value="{{ old('notas') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
