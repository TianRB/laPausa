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
          <p>Create tipos de precio</p>
          <a href=" {{ route('tipos_precio.index')}} ">index</a>
          
          <form action="{{ route('tipos_precio.store') }}" method="post">
            {{ csrf_field() }}
            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ old('display_name') }}">

            <label for="description">description (optional)</label>
            <input type="text" name="description" value="{{ old('description') }}">

            <label for="nombre_pantalla">nombre_pantalla</label>
            <input type="text" name="nombre_pantalla" value="{{ old('nombre_pantalla') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
