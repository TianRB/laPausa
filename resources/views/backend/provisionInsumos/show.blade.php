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
          <p>show provision_insumo</p>
          <a href=" {{ route('provision_insumos.index')}} ">index</a>
          <ul>
            <p>{{ $provisionInsumo->notas }}</p>
            <a href="{{ route('provision_insumos.show', $provisionInsumo->id) }}">show</a>
            <a href="{{ route('provision_insumos.edit', $provisionInsumo->id) }}">edit</a>
            <form action="{{ route('provision_insumos.destroy', ['id' => $provisionInsumo->id]) }}" method="POST" class="no-margin">
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
