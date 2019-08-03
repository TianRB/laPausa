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
          <p>Create registro procedimientos</p>
          <a href=" {{ route('registro_procedimientos.index')}} ">index</a>
          
          <form action="{{ route('registro_procedimientos.store') }}" method="post">
            {{ csrf_field() }}

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ old('area_id') }}">

            <label for="insumo_id">insumo_id</label>
            <input type="text" name="insumo_id" value="{{ old('insumo_id') }}">

            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ old('trabajador_id') }}">

            <label for="procedimientos">procedimientos</label>
            <input type="text" name="procedimientos" value="{{ old('procedimientos') }}">

            <label for="fecha">fecha</label>
            <input type="date" name="fecha" value="{{ old('fecha') }}">

            <label for="tiempo_consumido">tiempo_consumido</label>
            <input type="number" name="tiempo_consumido" value="{{ old('tiempo_consumido') }}">

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
