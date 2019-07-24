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
          <a href=" {{ route('provision_insumos.index')}} ">index</a>

          <form action="{{ route('provision_insumos.update', $provisionInsumo->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ $provisionInsumo->area_id }}">

            <label for="insumo_id">insumo_id</label>
            <input type="text" name="insumo_id" value="{{ $provisionInsumo->insumo_id }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ $provisionInsumo->trabajador_id }}">

            <label for="fecha">fecha</label>
            <input type="date" name="fecha" value="{{ $provisionInsumo->fecha }}">

            <label for="cantidad">cantidad</label>
            <input type="number" name="cantidad" value="{{ $provisionInsumo->cantidad }}">

            <label for="unidad_medida">unidad_medida</label>
            <input type="text" name="unidad_medida" value="{{ $provisionInsumo->unidad_medida }}">

            <label for="area_destino_id">area_destino_id</label>
            <input type="text" name="area_destino_id" value="{{ $provisionInsumo->area_destino_id }}">

            <label for="notas">notas</label>
            <input type="text" name="notas" value="{{ $provisionInsumo->notas }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection