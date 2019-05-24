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
          <p>Create Biocamas</p>
          <a href=" {{ route('biocamas.index')}} ">index</a>
          
          <form action="{{ route('biocamas.store') }}" method="post">
            {{ csrf_field() }}
            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ old('display_name') }}">

            <label for="description">description (optional)</label>
            <input type="text" name="description" value="{{ old('description') }}">

            <label for="area_id">area_id</label>
            <input type="text" name="area_id" value="{{ old('area_id') }}">

            <label for="largo">largo</label>
            <input type="text" name="largo" value="{{ old('largo') }}">

            <label for="ancho">ancho</label>
            <input type="text" name="ancho" value="{{ old('ancho') }}">

            <label for="ancho_pasillos_biocama">ancho_pasillos_biocama</label>
            <input type="text" name="ancho_pasillos_biocama" value="{{ old('ancho_pasillos_biocama') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
