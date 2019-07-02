@extends('layouts.app')

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
          <p>Create Animales</p>
          <a href=" {{ route('animales.index')}} ">index</a>
          
          <form action="{{ route('animales.store') }}" method="post">
            {{ csrf_field() }}

            <label for="animal_id">animal_id</label>
            <input type="text" name="animal_id" value="{{ old('animal_id') }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">

            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ old('display_name') }}">

            <label for="description">description</label>
            <input type="text" name="description" value="{{ old('description') }}">

            <label for="sexo">sexo</label>
            <input type="text" name="sexo" value="{{ old('sexo') }}">

            <label for="fecha_nac">fecha_nac</label>
            <input type="date" name="fecha_nac" value="{{ old('fecha_nac') }}">

            <label for="padres">padres</label>
            <input type="text" name="padres" value="{{ old('padres') }}">

            <label for="fecha_alta">fecha_alta</label>
            <input type="date" name="fecha_alta" value="{{ old('fecha_alta') }}">

            <label for="fecha_baja">fecha_baja</label>
            <input type="date" name="fecha_baja" value="{{ old('fecha_baja') }}">

            <label for="tiempo_consumido">tiempo_consumido</label>
            <input type="text" name="tiempo_consumido" value="{{ old('tiempo_consumido') }}">

            <label for="peso">peso</label>
            <input type="text" name="peso" value="{{ old('peso') }}">

            <label for="racion_alimento">racion_alimento</label>
            <input type="text" name="racion_alimento" value="{{ old('racion_alimento') }}">

            <label for="unidad_medida">unidad_medida</label>
            <input type="text" name="unidad_medida" value="{{ old('unidad_medida') }}">

            <label for="costo">costo</label>
            <input type="text" name="costo" value="{{ old('costo') }}">

            <label for="preventivos">preventivos</label>
            <input type="text" name="preventivos" value="{{ old('preventivos') }}">

            <label for="enfermedades">enfermedades</label>
            <input type="text" name="enfermedades" value="{{ old('enfermedades') }}">

            <label for="vacunas">vacunas</label>
            <input type="text" name="vacunas" value="{{ old('vacunas') }}">

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
