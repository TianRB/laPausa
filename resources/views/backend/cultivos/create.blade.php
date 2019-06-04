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
          <p>Create Cultivos</p>
          <a href=" {{ route('cultivos.index')}} ">index</a>
          
          <form action="{{ route('cultivos.store') }}" method="post">
            {{ csrf_field() }}

            <label for="especie">especie</label>
            <input type="text" name="especie" value="{{ old('especie') }}">

            <label for="variedad">variedad</label>
            <input type="text" name="variedad" value="{{ old('variedad') }}">

            <label for="nombre_cientifico">nombre_cientifico</label>
            <input type="text" name="nombre_cientifico" value="{{ old('nombre_cientifico') }}">

            <label for="nombre_comercial">nombre_comercial</label>
            <input type="text" name="nombre_comercial" value="{{ old('nombre_comercial') }}">

            <label for="tipo_cultivo">tipo_cultivo</label>
            <input type="number" name="tipo_cultivo" value="{{ old('tipo_cultivo') }}">

            <label for="tipo_siembra">tipo_siembra</label>
            <input type="number" name="tipo_siembra" value="{{ old('tipo_siembra') }}">

            <label for="tipo_cosecha">tipo_cosecha</label>
            <input type="number" name="tipo_cosecha" value="{{ old('tipo_cosecha') }}">

            <label for="veces_sembrado">veces_sembrado</label>
            <input type="text" name="veces_sembrado" value="{{ old('veces_sembrado') }}">

            <label for="temporada_optima_siembra">temporada_optima_siembra</label>
            <input type="text" name="temporada_optima_siembra" value="{{ old('temporada_optima_siembra') }}">

            <label for="dias_a_germinacion">dias_a_germinacion</label>
            <input type="number" name="dias_a_germinacion" value="{{ old('dias_a_germinacion') }}">

            <label for="dias_a_transplante">dias_a_transplante</label>
            <input type="number" name="dias_a_transplante" value="{{ old('dias_a_transplante') }}">

            <label for="dias_a_comienzo_cosecha">dias_a_comienzo_cosecha</label>
            <input type="number" name="dias_a_comienzo_cosecha" value="{{ old('dias_a_comienzo_cosecha') }}">

            <label for="dias_a_termino_cosecha">dias_a_termino_cosecha</label>
            <input type="number" name="dias_a_termino_cosecha" value="{{ old('dias_a_termino_cosecha') }}">

            <label for="fecha_inicio_cosecha">fecha_inicio_cosecha</label>
            <input type="date" name="fecha_inicio_cosecha" value="{{ old('fecha_inicio_cosecha') }}">

            <label for="fecha_termino_cosecha">fecha_termino_cosecha</label>
            <input type="date" name="fecha_termino_cosecha" value="{{ old('fecha_termino_cosecha') }}">

            <label for="distancia_siembra">distancia_siembra</label>
            <input type="text" name="distancia_siembra" value="{{ old('distancia_siembra') }}">

            <label for="densidad_siembra">densidad_siembra</label>
            <input type="text" name="densidad_siembra" value="{{ old('densidad_siembra') }}">

            <label for="hileras">hileras</label>
            <input type="text" name="hileras" value="{{ old('hileras') }}">

            <label for="unidad_medida_venta">unidad_medida_venta</label>
            <input type="text" name="unidad_medida_venta" value="{{ old('unidad_medida_venta') }}">

            <label for="unidad_medida_rendimiento">unidad_medida_rendimiento</label>
            <input type="text" name="unidad_medida_rendimiento" value="{{ old('unidad_medida_rendimiento') }}">

            <label for="rendimiento_promedio">rendimiento_promedio</label>
            <input type="text" name="rendimiento_promedio" value="{{ old('rendimiento_promedio') }}">

            <label for="rendimiento_promedio_acumulado">rendimiento_promedio_acumulado</label>
            <input type="text" name="rendimiento_promedio_acumulado" value="{{ old('rendimiento_promedio_acumulado') }}">

            <label for="semillas_por_gramo">semillas_por_gramo</label>
            <input type="text" name="semillas_por_gramo" value="{{ old('semillas_por_gramo') }}">

            <label for="calificacion_clientes">calificacion_clientes</label>
            <input type="text" name="calificacion_clientes" value="{{ old('calificacion_clientes') }}">

            <label for="ingreso_por_metro_lineal">ingreso_por_metro_lineal</label>
            <input type="text" name="ingreso_por_metro_lineal" value="{{ old('ingreso_por_metro_lineal') }}">

            <label for="indice_ingreso_por_tiempo">indice_ingreso_por_tiempo</label>
            <input type="text" name="indice_ingreso_por_tiempo" value="{{ old('indice_ingreso_por_tiempo') }}">

            <label for="semillas_por_saco">semillas_por_saco</label>
            <input type="text" name="semillas_por_saco" value="{{ old('semillas_por_saco') }}">

            <label for="valor_por_hectarea">valor_por_hectarea</label>
            <input type="text" name="valor_por_hectarea" value="{{ old('valor_por_hectarea') }}">

            <label for="valor_por_kilogramo">valor_por_kilogramo</label>
            <input type="text" name="valor_por_kilogramo" value="{{ old('valor_por_kilogramo') }}">

            <label for="ingreso_por_arbol">ingreso_por_arbol</label>
            <input type="text" name="ingreso_por_arbol" value="{{ old('ingreso_por_arbol') }}">

            <label for="tipo_charola">tipo_charola</label>
            <input type="text" name="tipo_charola" value="{{ old('tipo_charola') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
