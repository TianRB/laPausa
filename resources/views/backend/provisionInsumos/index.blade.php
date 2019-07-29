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
          <p>Index provision Insumo</p>
          <a href=" {{ route('provision_insumos.create')}} ">create</a>
          <ol>
            @forelse ($provisionInsumos as $tc)
            <li>
              {{-- var_dump($tc) --}}
              <p>{{ $tc->cantidad}}</p>
              <a href="{{ route('provision_insumos.show', $tc->id) }}">show</a>
              <a href="{{ route('provision_insumos.edit', $tc->id) }}">edit</a>
              <form action="{{ route('provision_insumos.destroy', ['id' => $tc->id]) }}" method="POST" class="no-margin">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="delete" />
                <button type="submit" class="btn btn-danger"><i class="fa fa-trash">delete</i></button>
              </form>
            </li>
            @empty
            <p>Tabla Vacía</p>
            @endforelse
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
