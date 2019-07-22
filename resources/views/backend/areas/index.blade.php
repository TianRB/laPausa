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
          <p>Index Áreas</p>
          <a href=" {{ route('areas.create')}} ">create</a>
          <ul>
            @forelse ($areas as $f)
            {{-- var_dump($f) --}}
            <p>{{ $f->display_name }}</p>
            <p>Trabajador id: {{ $f->trabajador_id }}</p>
            <p>Trabajadores aux: {{ $f->trabajadores_aux }}</p>
            <p>Biocamas: {{ $f->numero_biocamas }}</p>
            <p>superficie productiva: {{ $f->total_superficie_productiva }}</p>
            <a href="{{ route('areas.show', $f->id) }}">show</a>
            <a href="{{ route('areas.edit', $f->id) }}">edit</a>
            <form action="{{ route('areas.destroy', ['id' => $f->id]) }}" method="POST" class="no-margin">
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
