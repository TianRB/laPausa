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
          <p>Create herramienta y maquinaria</p>
          <a href=" {{ route('herr_maq.index')}} ">index</a>
          
          <form action="{{ route('herr_maq.store') }}" method="post">
            {{ csrf_field() }}

            <label for="herramienta_id">herramienta_id</label>
            <input type="text" name="herramienta_id" value="{{ old('herramienta_id') }}">

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ old('area_id') }}">

            <label for="trabajador_id">trabajador_id (opcional)</label>
            <input type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">

            <label for="cantidad">cantidad</label>
            <input type="number" name="cantidad" value="{{ old('cantidad') }}">

            <label for="unidad_de_medida">unidad_de_medida</label>
            <input type="text" name="unidad_de_medida" value="{{ old('unidad_de_medida') }}">

            <label for="fecha_alta">fecha_alta</label>
            <input type="date" name="fecha_alta" value="{{ old('fecha_alta') }}">

            <label for="fecha_baja">fecha_baja</label>
            <input type="date" name="fecha_baja" value="{{ old('fecha_baja') }}">

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
