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
          <p>Create Siembra de Hongos</p>
          <a href=" {{ route('siembra_hongos.index')}} ">index</a>
          
          <form action="{{ route('siembra_hongos.store') }}" method="post">
            {{ csrf_field() }}
            
            <label for="cultivo_id">cultivo_id</label>
            <input type="text" name="cultivo_id" value="{{ old('cultivo_id') }}">
            
            <label for="fecha_prevista_siembra">fecha_prevista_siembra</label>
            <input type="date" name="fecha_prevista_siembra" value="{{ old('fecha_prevista_siembra') }}">
            
            <label for="numero_de_bloques_previsto">numero_de_bloques_previsto</label>
            <input type="text" name="numero_de_bloques_previsto" value="{{ old('numero_de_bloques_previsto') }}">
            
            <label for="numero_de_frascos_previsto">numero_de_frascos_previsto</label>
            <input type="text" name="numero_de_frascos_previsto" value="{{ old('numero_de_frascos_previsto') }}">
            
            <label for="numero_de_cajas_petri_necesarias">numero_de_cajas_petri_necesarias</label>
            <input type="text" name="numero_de_cajas_petri_necesarias" value="{{ old('numero_de_cajas_petri_necesarias') }}">
            
            <label for="cantidad_de_semillas_necesaria">cantidad_de_semillas_necesaria</label>
            <input type="text" name="cantidad_de_semillas_necesaria" value="{{ old('cantidad_de_semillas_necesaria') }}">
            
            <label for="fecha_real_siembra">fecha_real_siembra</label>
            <input type="date" name="fecha_real_siembra" value="{{ old('fecha_real_siembra') }}">
            
            <label for="trabajador_semilla_id">trabajador_semilla_id</label>
            <input type="text" name="trabajador_semilla_id" value="{{ old('trabajador_semilla_id') }}">
            
            <label for="fecha_siembra_f1">fecha_siembra_f1</label>
            <input type="date" name="fecha_siembra_f1" value="{{ old('fecha_siembra_f1') }}">
            
            <label for="contaminaciones">contaminaciones</label>
            <input type="text" name="contaminaciones" value="{{ old('contaminaciones') }}">
            
            <label for="fecha_siembra_f2">fecha_siembra_f2</label>
            <input type="date" name="fecha_siembra_f2" value="{{ old('fecha_siembra_f2') }}">
            
            <label for="numero_f2">numero_f2</label>
            <input type="text" name="numero_f2" value="{{ old('numero_f2') }}">
            
            <label for="contaminaciones_f2">contaminaciones_f2</label>
            <input type="text" name="contaminaciones_f2" value="{{ old('contaminaciones_f2') }}">
            
            <label for="numero_total_frascos">numero_total_frascos</label>
            <input type="text" name="numero_total_frascos" value="{{ old('numero_total_frascos') }}">
            
            <label for="notas_semillas">notas_semillas</label>
            <input type="text" name="notas_semillas" value="{{ old('notas_semillas') }}">
            
            <label for="area_semilla_id">area_semilla_id</label>
            <input type="text" name="area_semilla_id" value="{{ old('area_semilla_id') }}">
            
            <p>Siembra en bloques</p>

            <label for="area_bloques_id">area_bloques_id</label>
            <input type="text" name="area_bloques_id" value="{{ old('area_bloques_id') }}">
            
            <label for="trabajador_bloque_id">trabajador_bloque_id</label>
            <input type="text" name="trabajador_bloque_id" value="{{ old('trabajador_bloque_id') }}">
            
            <label for="fechas_siembra_bloque">fechas_siembra_bloque</label>
            <input type="date" name="fechas_siembra_bloque" value="{{ old('fechas_siembra_bloque') }}">
            
            <label for="numero_frascos">numero_frascos</label>
            <input type="text" name="numero_frascos" value="{{ old('numero_frascos') }}">
            
            <label for="bloques_sembrados">bloques_sembrados</label>
            <input type="text" name="bloques_sembrados" value="{{ old('bloques_sembrados') }}">
            
            <label for="fecha_invasion">fecha_invasion</label>
            <input type="date" name="fecha_invasion" value="{{ old('fecha_invasion') }}">
            
            <label for="bloques_invadidos">bloques_invadidos</label>
            <input type="text" name="bloques_invadidos" value="{{ old('bloques_invadidos') }}">
            
            <label for="fecha_termino">fecha_termino</label>
            <input type="date" name="fecha_termino" value="{{ old('fecha_termino') }}">
            
            <label for="tipo_de_termino">tipo_de_termino</label>
            <input type="text" name="tipo_de_termino" value="{{ old('tipo_de_termino') }}">
            
            <label for="notas_bloque">notas_bloque</label>
            <input type="text" name="notas_bloque" value="{{ old('notas_bloque') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
