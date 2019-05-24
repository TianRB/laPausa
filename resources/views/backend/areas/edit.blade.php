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
          <p>Edit Areas</p>
          <a href=" {{ route('areas.index')}} ">index</a>
          
          <form action="{{ route('areas.update', $area->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ $area->display_name }}">
            
            <label for="description">description (optional)</label>
            <input type="text" name="description" value="{{ $area->description }}">
            
            <label for="trabajador_id">trabajador_id</label>
            <input type="text" name="trabajador_id" value="{{ $area->trabajador_id }}">
            
            <label for="trabajadores_aux">trabajadores_aux</label>
            <input type="text" name="trabajadores_aux" value="{{ $area->trabajadores_aux }}">
            
            <label for="numero_biocamas">numero_biocamas</label>
            <input type="text" name="numero_biocamas" value="{{ $area->numero_biocamas }}">
            
            <label for="total_superficie_productiva">total_superficie_productiva</label>
            <input type="text" name="total_superficie_productiva" value="{{ $area->total_superficie_productiva }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
