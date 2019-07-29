@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md1-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        
        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <p>Create Siembra de Germinados</p>
          <a href=" {{ route('siembra_germinados.index')}} ">index</a>
          
          <form action="{{ route('siembra_germinados.store') }}" method="post">
            {{ csrf_field() }}

            <label for="cultivo_id">cultivo_id</label>
            <input type="text" name="cultivo_id" value="{{ old('cultivo_id') }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">

            <label for="fecha_prevista_siembra">fecha_prevista_siembra</label>
            <input type="date" name="fecha_prevista_siembra" value="{{ old('fecha_prevista_siembra') }}">

            <label for="tipo_charola_prevista">tipo_charola_prevista</label>
            <input type="text" name="tipo_charola_prevista" value="{{ old('tipo_charola_prevista') }}">

            <label for="cantidad_charolas_prevista">cantidad_charolas_prevista</label>
            <input type="text" name="cantidad_charolas_prevista" value="{{ old('cantidad_charolas_prevista') }}">

            <label for="densidad_siembra_prevista">densidad_siembra_prevista</label>
            <input type="text" name="densidad_siembra_prevista" value="{{ old('densidad_siembra_prevista') }}">

            <label for="cantidad_semilla_prevista">cantidad_semilla_prevista</label>
            <input type="text" name="cantidad_semilla_prevista" value="{{ old('cantidad_semilla_prevista') }}">

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ old('area_id') }}">

            <label for="tipo_charola">tipo_charola</label>
            <input type="text" name="tipo_charola" value="{{ old('tipo_charola') }}">

            <label for="cantidad_charolas">cantidad_charolas</label>
            <input type="text" name="cantidad_charolas" value="{{ old('cantidad_charolas') }}">

            <label for="densidad_siembra">densidad_siembra</label>
            <input type="text" name="densidad_siembra" value="{{ old('densidad_siembra') }}">

            <label for="cantidad_semilla">cantidad_semilla</label>
            <input type="text" name="cantidad_semilla" value="{{ old('cantidad_semilla') }}">

            <label for="registro_cancelacion_siembras">registro_cancelacion_siembras</label>
            <input type="text" name="registro_cancelacion_siembras" value="{{ old('registro_cancelacion_siembras') }}">

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
