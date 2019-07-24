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
          <p>Index Registro de Procedimientos</p>
          <a href=" {{ route('registro_procedimientos.create')}} ">create</a>
          <ol>
            @forelse ($registroProcedimientos as $tc)
            <li>
              {{-- var_dump($tc) --}}
              <p>{{ $tc->procedimientos}}</p>
              <a href="{{ route('registro_procedimientos.show', $tc->id) }}">show</a>
              <a href="{{ route('registro_procedimientos.edit', $tc->id) }}">edit</a>
              <form action="{{ route('registro_procedimientos.destroy', ['id' => $tc->id]) }}" method="POST" class="no-margin">
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
