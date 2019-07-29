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
          <p>Edit registro de procedimiento</p>
          <a href=" {{ route('registro_procedimientos.index')}} ">index</a>

          <form action="{{ route('registro_procedimientos.update', $registroProcedimiento->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ $registroProcedimiento->area_id }}">

            <label for="insumo_id">insumo_id</label>
            <input type="text" name="insumo_id" value="{{ $registroProcedimiento->insumo_id }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ $registroProcedimiento->trabajador_id }}">

            <label for="procedimientos">procedimientos</label>
            <input type="text" name="procedimientos" value="{{ $registroProcedimiento->procedimientos }}">

            <label for="fecha">fecha</label>
            <input type="date" name="fecha" value="{{ $registroProcedimiento->fecha }}">

            <label for="tiempo_consumido">tiempo_consumido</label>
            <input type="number" name="tiempo_consumido" value="{{ $registroProcedimiento->tiempo_consumido }}">

            <label for="notas">notas</label>
            <input type="text" name="notas" value="{{ $registroProcedimiento->notas }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection