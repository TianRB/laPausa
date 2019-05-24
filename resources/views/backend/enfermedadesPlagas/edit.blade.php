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
          <p>Edit Enfermedades y Plagas</p>
          <a href=" {{ route('enfermedades_y_plagas.index')}} ">index</a>
          
          <form action="{{ route('enfermedades_y_plagas.update', $EnfermedadPlaga) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ $EnfermedadPlaga->display_name }}">

            <label for="description">description (optional)</label>
            <input type="text" name="description" value="{{ $EnfermedadPlaga->description }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
