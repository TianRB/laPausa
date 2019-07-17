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
          <p>Edit registro de combustible</p>
          <a href=" {{ route('registro_combustible.index')}} ">index</a>
          
          <form action="{{ route('registro_combustible.update', $registroCombustible->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

           <label for="herramienta_id">herramienta_id</label>
          <input type="text" name="herramienta_id" value="{{ $registroCombustible->herramienta_id }}">
          
          <label for="trabajador_id">trabajador_id</label>
          <input type="text" name="trabajador_id" value="{{ $registroCombustible->trabajador_id }}">
          
          <label for="litros_cargados">litros_cargados</label>
          <input type="text" name="litros_cargados" value="{{ $registroCombustible->litros_cargados }}">
          
          <label for="costo_litro">costo_litro</label>
          <input type="number" name="costo_litro" value="{{ $registroCombustible->costo_litro }}">
          
          <label for="odometro_u_horas">odometro_u_horas</label>
          <input type="text" name="odometro_u_horas" value="{{ $registroCombustible->odometro_u_horas }}">
          
          <label for="fecha">fecha</label>
          <input type="date" name="fecha" value="{{ $registroCombustible->fecha }}">
          
          <label for="notas">notas</label>
          <input type="text" name="notas" value="{{ $registroCombustible->notas }}">

            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
