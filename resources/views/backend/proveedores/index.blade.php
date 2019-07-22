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
          <p>Index Proveedores</p>
          <a href=" {{ route('proveedores.create')}} ">create</a>
          <ul>
            @forelse ($proveedores as $tc)
            {{-- var_dump($tc) --}}
            <p>{{ $tc->display_name }}</p>
            <p>{{ $tc->direccion }}</p>
            <p>{{ $tc->cp }}</p>
            <a href="{{ route('proveedores.show', $tc->id) }}">show</a>
            <a href="{{ route('proveedores.edit', $tc->id) }}">edit</a>
            <form action="{{ route('proveedores.destroy', ['id' => $tc->id]) }}" method="POST" class="no-margin">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="delete" />
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash">delete</i></button>
            </form>
            @empty
              <p>Tabla Vacía</p>
            @endforelse
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
