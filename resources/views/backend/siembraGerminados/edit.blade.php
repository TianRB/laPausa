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
          <p>Edit Siembra Germinados</p>
          <a href=" {{ route('siembra_germinados.index')}} ">index</a>

          <form action="{{ route('siembra_germinados.update', $siembraGerminado) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="cultivo_id">cultivo_id</label>
            <input type="text" name="cultivo_id" value="{{ $siembraGerminado->cultivo_id }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ $siembraGerminado->trabajador_id }}">

            <label for="fecha_prevista_siembra">fecha_prevista_siembra</label>
            <input type="date" name="fecha_prevista_siembra" value="{{ $siembraGerminado->fecha_prevista_siembra }}">

            <label for="tipo_charola_prevista">tipo_charola_prevista</label>
            <input type="text" name="tipo_charola_prevista" value="{{ $siembraGerminado->tipo_charola_prevista }}">

            <label for="cantidad_charolas_prevista">cantidad_charolas_prevista</label>
            <input type="text" name="cantidad_charolas_prevista" value="{{ $siembraGerminado->cantidad_charolas_prevista }}">

            <label for="densidad_siembra_prevista">densidad_siembra_prevista</label>
            <input type="text" name="densidad_siembra_prevista" value="{{ $siembraGerminado->densidad_siembra_prevista }}">

            <label for="cantidad_semilla_prevista">cantidad_semilla_prevista</label>
            <input type="text" name="cantidad_semilla_prevista" value="{{ $siembraGerminado->cantidad_semilla_prevista }}">

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ $siembraGerminado->area_id }}">

            <label for="tipo_charola">tipo_charola</label>
            <input type="text" name="tipo_charola" value="{{ $siembraGerminado->tipo_charola }}">

            <label for="cantidad_charolas">cantidad_charolas</label>
            <input type="text" name="cantidad_charolas" value="{{ $siembraGerminado->cantidad_charolas }}">

            <label for="densidad_siembra">densidad_siembra</label>
            <input type="text" name="densidad_siembra" value="{{ $siembraGerminado->densidad_siembra }}">

            <label for="cantidad_semilla">cantidad_semilla</label>
            <input type="text" name="cantidad_semilla" value="{{ $siembraGerminado->cantidad_semilla }}">

            <label for="registro_cancelacion_siembras">registro_cancelacion_siembras</label>
            <input type="text" name="registro_cancelacion_siembras" value="{{ $siembraGerminado->registro_cancelacion_siembras }}">

            <label for="notas">notas</label>
            <input type="text" name="notas" value="{{ $siembraGerminado->notas }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection