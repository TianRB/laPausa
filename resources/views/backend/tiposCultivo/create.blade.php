@extends('layouts.dashboard')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md1-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>
        
        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
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
</div>
@endsection
