@extends('layouts.app')

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
          <p>Index Biocamas</p>
          <a href=" {{ route('biocamas.create')}} ">create</a>
          <ul>
            @forelse ($biocamas as $f)
            {{-- var_dump($f) --}}
            <p>{{ $f->display_name }}</p>
            <p>Trabajador id: {{ $f->area_id }}</p>
            <p>Largo: {{ $f->largo }}</p>
            <p>Ancho: {{ $f->ancho }}</p>
            <p>Ancho pasillo: {{ $f->ancho_pasillos_biocama }}</p>
            <a href="{{ route('biocamas.show', $f->id) }}">show</a>
            <a href="{{ route('biocamas.edit', $f->id) }}">edit</a>
            <form action="{{ route('biocamas.destroy', ['id' => $f->id]) }}" method="POST" class="no-margin">
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
