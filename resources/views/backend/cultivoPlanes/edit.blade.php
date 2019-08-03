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
          <p>Edit cultivo_planes</p>
          <a href=" {{ route('cultivo_planes.index')}} ">index</a>

          <form action="{{ route('cultivo_planes.update', $cultivoPlan->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />
            <label for="cultivo_id">cultivo_id</label>
            <input type="number" name="cultivo_id" value="{{ $cultivoPlan->cultivo_id }}">

            <label for="plan_id">plan_id</label>
            <input type="number" name="plan_id" value="{{ $cultivoPlan->plan_id }}">

            <label for="tipo_de_precio_id">tipo_de_precio_id</label>
            <input type="number" name="tipo_de_precio_id" value="{{ $cultivoPlan->tipo_de_precio_id }}">

            <label for="cantidad_proyectada_por_cosecha">cantidad_proyectada_por_cosecha</label>
            <input type="text" name="cantidad_proyectada_por_cosecha" value="{{ $cultivoPlan->cantidad_proyectada_por_cosecha }}">

            <label for="cantidad_proyectada_por_semana">cantidad_proyectada_por_semana</label>
            <input type="text" name="cantidad_proyectada_por_semana" value="{{ $cultivoPlan->cantidad_proyectada_por_semana }}">

            <label for="fechas_de_siembra">fechas_de_siembra</label>
            <input type="text" name="fechas_de_siembra" value="{{ $cultivoPlan->fechas_de_siembra }}">

            <label for="unidad_de_medida">unidad_de_medida</label>
            <input type="text" name="unidad_de_medida" value="{{ $cultivoPlan->unidad_de_medida }}">

            <label for="ingreso_proyectado_anual">ingreso_proyectado_anual</label>
            <input type="text" name="ingreso_proyectado_anual" value="{{ $cultivoPlan->ingreso_proyectado_anual }}">

            <label for="ingreso_proyectada_por_cosecha">ingreso_proyectada_por_cosecha</label>
            <input type="text" name="ingreso_proyectada_por_cosecha" value="{{ $cultivoPlan->ingreso_proyectada_por_cosecha }}">

            <label for="ingreso_proyectada_por_semana">ingreso_proyectada_por_semana</label>
            <input type="text" name="ingreso_proyectada_por_semana" value="{{ $cultivoPlan->ingreso_proyectada_por_semana }}">

            <label for="cantidad_por_cosecha">cantidad_por_cosecha</label>
            <input type="text" name="cantidad_por_cosecha" value="{{ $cultivoPlan->cantidad_por_cosecha }}">

            <label for="cantidad_por_semana">cantidad_por_semana</label>
            <input type="text" name="cantidad_por_semana" value="{{ $cultivoPlan->cantidad_por_semana }}">

            <label for="cantidad_venta_proyectada">cantidad_venta_proyectada</label>
            <input type="text" name="cantidad_venta_proyectada" value="{{ $cultivoPlan->cantidad_venta_proyectada }}">

            <label for="cantidad_proyectada_por_cosecha_periodo_anterior">cantidad_proyectada_por_cosecha_periodo_anterior</label>
            <input type="text" name="cantidad_proyectada_por_cosecha_periodo_anterior" value="{{ $cultivoPlan->cantidad_proyectada_por_cosecha_periodo_anterior }}">

            <label for="cantidad_proyectada_por_semana_periodo_anterior">cantidad_proyectada_por_semana_periodo_anterior</label>
            <input type="text" name="cantidad_proyectada_por_semana_periodo_anterior" value="{{ $cultivoPlan->cantidad_proyectada_por_semana_periodo_anterior }}">

            <label for="cantidad_venta_periodo_anterior">cantidad_venta_periodo_anterior</label>
            <input type="text" name="cantidad_venta_periodo_anterior" value="{{ $cultivoPlan->cantidad_venta_periodo_anterior }}">

            <label for="metros_lineales_necesarios">metros_lineales_necesarios</label>
            <input type="number" name="metros_lineales_necesarios" value="{{ $cultivoPlan->metros_lineales_necesarios }}">

            <label for="frascos_por_siembra">frascos_por_siembra</label>
            <input type="number" name="frascos_por_siembra" value="{{ $cultivoPlan->frascos_por_siembra }}">

            <label for="cajas_petri_por_siembra">cajas_petri_por_siembra</label>
            <input type="number" name="cajas_petri_por_siembra" value="{{ $cultivoPlan->cajas_petri_por_siembra }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection