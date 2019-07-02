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
          <p>Edit Cultivos</p>
          <a href=" {{ route('cultivos.index')}} ">index</a>
          
          <form action="{{ route('cultivos.update', $cultivo->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="especie">especie</label>
            <input type="text" name="especie" value="{{ $cultivo->especie }}">
            
            <label for="variedad">variedad</label>
            <input type="text" name="variedad" value="{{ $cultivo->variedad }}">
            
            <label for="nombre_cientifico">nombre_cientifico</label>
            <input type="text" name="nombre_cientifico" value="{{ $cultivo->nombre_cientifico }}">
            
            <label for="nombre_comercial">nombre_comercial</label>
            <input type="text" name="nombre_comercial" value="{{ $cultivo->nombre_comercial }}">
            
            <label for="tipo_cultivo">tipo_cultivo</label>
            <input type="number" name="tipo_cultivo" value="{{ $cultivo->tipo_cultivo }}">
            
            <label for="tipo_siembra">tipo_siembra</label>
            <input type="number" name="tipo_siembra" value="{{ $cultivo->tipo_siembra }}">
            
            <label for="tipo_cosecha">tipo_cosecha</label>
            <input type="number" name="tipo_cosecha" value="{{ $cultivo->tipo_cosecha }}">
            
            <label for="veces_sembrado">veces_sembrado</label>
            <input type="text" name="veces_sembrado" value="{{ $cultivo->veces_sembrado }}">
            
            <label for="temporada_optima_siembra">temporada_optima_siembra</label>
            <input type="text" name="temporada_optima_siembra" value="{{ $cultivo->temporada_optima_siembra }}">
            
            <label for="dias_a_germinacion">dias_a_germinacion</label>
            <input type="number" name="dias_a_germinacion" value="{{ $cultivo->dias_a_germinacion }}">
            
            <label for="dias_a_transplante">dias_a_transplante</label>
            <input type="number" name="dias_a_transplante" value="{{ $cultivo->dias_a_transplante }}">
            
            <label for="dias_a_comienzo_cosecha">dias_a_comienzo_cosecha</label>
            <input type="number" name="dias_a_comienzo_cosecha" value="{{ $cultivo->dias_a_comienzo_cosecha }}">
            
            <label for="dias_a_termino_cosecha">dias_a_termino_cosecha</label>
            <input type="number" name="dias_a_termino_cosecha" value="{{ $cultivo->dias_a_termino_cosecha }}">
            
            <label for="fecha_inicio_cosecha">fecha_inicio_cosecha</label>
            <input type="date" name="fecha_inicio_cosecha" value="{{ $cultivo->fecha_inicio_cosecha }}">
            
            <label for="fecha_termino_cosecha">fecha_termino_cosecha</label>
            <input type="date" name="fecha_termino_cosecha" value="{{ $cultivo->fecha_termino_cosecha }}">
            
            <label for="distancia_siembra">distancia_siembra</label>
            <input type="text" name="distancia_siembra" value="{{ $cultivo->distancia_siembra }}">
            
            <label for="densidad_siembra">densidad_siembra</label>
            <input type="text" name="densidad_siembra" value="{{ $cultivo->densidad_siembra }}">
            
            <label for="hileras">hileras</label>
            <input type="text" name="hileras" value="{{ $cultivo->hileras }}">
            
            <label for="unidad_medida_venta">unidad_medida_venta</label>
            <input type="text" name="unidad_medida_venta" value="{{ $cultivo->unidad_medida_venta }}">
            
            <label for="unidad_medida_rendimiento">unidad_medida_rendimiento</label>
            <input type="text" name="unidad_medida_rendimiento" value="{{ $cultivo->unidad_medida_rendimiento }}">
            
            <label for="rendimiento_promedio">rendimiento_promedio</label>
            <input type="text" name="rendimiento_promedio" value="{{ $cultivo->rendimiento_promedio }}">
            
            <label for="rendimiento_promedio_acumulado">rendimiento_promedio_acumulado</label>
            <input type="text" name="rendimiento_promedio_acumulado" value="{{ $cultivo->rendimiento_promedio_acumulado }}">
            
            <label for="semillas_por_gramo">semillas_por_gramo</label>
            <input type="text" name="semillas_por_gramo" value="{{ $cultivo->semillas_por_gramo }}">
            
            <label for="calificacion_clientes">calificacion_clientes</label>
            <input type="text" name="calificacion_clientes" value="{{ $cultivo->calificacion_clientes }}">
            
            <label for="ingreso_por_metro_lineal">ingreso_por_metro_lineal</label>
            <input type="text" name="ingreso_por_metro_lineal" value="{{ $cultivo->ingreso_por_metro_lineal }}">
            
            <label for="indice_ingreso_por_tiempo">indice_ingreso_por_tiempo</label>
            <input type="text" name="indice_ingreso_por_tiempo" value="{{ $cultivo->indice_ingreso_por_tiempo }}">
            
            <label for="semillas_por_saco">semillas_por_saco</label>
            <input type="text" name="semillas_por_saco" value="{{ $cultivo->semillas_por_saco }}">
            
            <label for="valor_por_hectarea">valor_por_hectarea</label>
            <input type="text" name="valor_por_hectarea" value="{{ $cultivo->valor_por_hectarea }}">
            
            <label for="valor_por_kilogramo">valor_por_kilogramo</label>
            <input type="text" name="valor_por_kilogramo" value="{{ $cultivo->valor_por_kilogramo }}">
            
            <label for="ingreso_por_arbol">ingreso_por_arbol</label>
            <input type="text" name="ingreso_por_arbol" value="{{ $cultivo->ingreso_por_arbol }}">
            
            <label for="tipo_charola">tipo_charola</label>
            <input type="text" name="tipo_charola" value="{{ $cultivo->tipo_charola }}">
            <label for="familia">familia</label>
            <input type="text" name="familia" value="{{ $cultivo->familia }}">
            
            <label for="proveedor">proveedor</label>
            <input type="text" name="proveedor" value="{{ $cultivo->proveedor }}">
            
            <label for="grupo">grupo</label>
            <input type="text" name="grupo" value="{{ $cultivo->grupo }}">
            
            <label for="resistencias">resistencias</label>
            <input type="text" name="resistencias" value="{{ $cultivo->resistencias }}">
            
            <label for="enfermedades">enfermedades</label>
            <input type="text" name="enfermedades" value="{{ $cultivo->enfermedades }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
