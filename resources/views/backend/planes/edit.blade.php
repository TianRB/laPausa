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
          <p>Edit planes</p>
          <a href=" {{ route('planes.index')}} ">index</a>
          
          <form action="{{ route('planes.update', $plan->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="nombre">nombre</label>
            <input type="text" name="nombre" value="{{ $plan->nombre }}">
            
            <label for="fecha_inicio">fecha_inicio</label>
            <input type="date" name="fecha_inicio" value="{{ $plan->fecha_inicio }}">
            
            <label for="fecha_fin">fecha_fin</label>
            <input type="date" name="fecha_fin" value="{{ $plan->fecha_fin }}">
            
            <label for="total_ventas">total_ventas</label>
            <input type="text" name="total_ventas" value="{{ $plan->total_ventas }}">
            
            <label for="subtotal_por_semana">subtotal_por_semana</label>
            <input type="text" name="subtotal_por_semana" value="{{ $plan->subtotal_por_semana }}">
            
            <label for="total_ventas_periodo_anterior">total_ventas_periodo_anterior</label>
            <input type="text" name="total_ventas_periodo_anterior" value="{{ $plan->total_ventas_periodo_anterior }}">
            
            <label for="total_anual_proyectado">total_anual_proyectado</label>
            <input type="text" name="total_anual_proyectado" value="{{ $plan->total_anual_proyectado }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
