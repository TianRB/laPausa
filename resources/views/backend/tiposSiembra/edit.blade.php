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
          <p>Edit Tipos de Siembra</p>
          <a href=" {{ route('tipos_siembra.index')}} ">index</a>
          
          <form action="{{ route('tipos_siembra.update', $tipoSiembra->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ $tipoSiembra->display_name }}">

            <label for="description">description (optional)</label>
            <input type="text" name="description" value="{{ $tipoSiembra->description }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
