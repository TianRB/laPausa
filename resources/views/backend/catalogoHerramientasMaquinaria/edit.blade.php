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
          <p>Edit Animales</p>
          <a href=" {{ route('cat_herr_maq.index')}} ">index</a>
          
          <form action="{{ route('cat_herr_maq.update', $herramientaMaquinaria->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />
            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ $herramientaMaquinaria->display_name }}">
            
            <label for="description">description</label>
            <input type="text" name="description" value="{{ $herramientaMaquinaria->description }}">
            
            <label for="tipo">tipo (Maquinaria | Herramienta)</label>
            <input type="text" name="tipo" value="{{ $herramientaMaquinaria->tipo }}">
            
            <label for="marca">marca</label>
            <input type="text" name="marca" value="{{ $herramientaMaquinaria->marca }}">
            
            <label for="modelo">modelo</label>
            <input type="text" name="modelo" value="{{ $herramientaMaquinaria->modelo }}">
            
            <label for="datos">datos (json)</label>
            <input type="text" name="datos" value="{{ $herramientaMaquinaria->datos }}">

            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
