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
          <p>Edit Catalogo Animales</p>
          <a href=" {{ route('catalogo_animales.index')}} ">index</a>
          
          <form action="{{ route('catalogo_animales.update', $catAnimal->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />
            
            <label for="especie">especie</label>
            <input type="text" name="especie" value="{{ $catAnimal->especie }}">
            
            <label for="raza">raza</label>
            <input type="text" name="raza" value="{{ $catAnimal->raza }}">
            
            <label for="nombre_cientifico">nombre_cientifico</label>
            <input type="text" name="nombre_cientifico" value="{{ $catAnimal->nombre_cientifico }}">
            
            <label for="nombre_comercial">nombre_comercial</label>
            <input type="text" name="nombre_comercial" value="{{ $catAnimal->nombre_comercial }}">
            
            <label for="dias_gestacion">dias_gestacion</label>
            <input type="text" name="dias_gestacion" value="{{ $catAnimal->dias_gestacion }}">
            
            <label for="ciclo_celo">ciclo_celo</label>
            <input type="text" name="ciclo_celo" value="{{ $catAnimal->ciclo_celo }}">
            
            <label for="dias_lactacion">dias_lactacion</label>
            <input type="text" name="dias_lactacion" value="{{ $catAnimal->dias_lactacion }}">
            
            <label for="alimentacion">alimentacion</label>
            <input type="text" name="alimentacion" value="{{ $catAnimal->alimentacion }}">
            
            <label for="productos">productos</label>
            <input type="text" name="productos" value="{{ $catAnimal->productos }}">
            
            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
