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
          <p>show Tipos de Siembra</p>
          <a href=" {{ route('tipos_siembra.index')}} ">index</a>
          <ul>
            <p>{{ $tipoSiembra->display_name }}</p>
            <a href="{{ route('tipos_siembra.show', $tipoSiembra->id) }}">show</a>
            <a href="{{ route('tipos_siembra.edit', $tipoSiembra->id) }}">edit</a>
            <form action="{{ route('tipos_siembra.destroy', ['id' => $tipoSiembra->id]) }}" method="POST" class="no-margin">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="delete" />
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash">delete</i></button>
            </form>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
