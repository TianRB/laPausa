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
          <p>Index Enfermedades y Plagas</p>
          <a href=" {{ route('enfermedades_y_plagas.create')}} ">create</a>
          <ul>
            @forelse ($EnfermedadPlagas as $f)
            {{-- var_dump($f) --}}
            <p>{{ $f->display_name }}</p>
            <a href="{{ route('enfermedades_y_plagas.show', $f->id) }}">show</a>
            <a href="{{ route('enfermedades_y_plagas.edit', $f->id) }}">edit</a>
            <form action="{{ route('enfermedades_y_plagas.destroy', ['id' => $f->id]) }}" method="POST" class="no-margin">
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
