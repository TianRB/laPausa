@extends('layouts.dashboard')
@section('page_title')
  Crear tipo de cultivo
@endsection


@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
  <div class="row">
    <div class="col-12">
        <h1 class="">@yield('page_title')</h1>
    </div>
  </div>
  <div class="row">

    <div class="col-12">
      <div class="panel-body">
   
        <p>Create Tipos de Cultivo</p>
        <a href=" {{ route('tipos_cultivo.index')}} ">index</a>
        
        <form action="{{ route('tipos_cultivo.store') }}" method="post">
          {{ csrf_field() }}
          <label for="display_name">display_name</label>
          <input type="text" name="display_name" value="{{ old('display_name') }}">

          <label for="description">description (optional)</label>
          <input type="text" name="description" value="{{ old('description') }}">

          <input type="submit" value="submit">
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
