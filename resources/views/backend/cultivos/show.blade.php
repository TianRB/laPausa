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
          <p>show Cultivo</p>
          <a href=" {{ route('cultivos.index')}} ">index</a>
          <ul>
            <p>{{ $cultivo->nombre_comercial }}</p>
            <a href="{{ route('cultivos.show', $cultivo->id) }}">show</a>
            <a href="{{ route('cultivos.edit', $cultivo->id) }}">edit</a>
            <form action="{{ route('cultivos.destroy', ['id' => $cultivo->id]) }}" method="POST" class="no-margin">
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
