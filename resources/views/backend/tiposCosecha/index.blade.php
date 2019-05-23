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
          <p>Index Tipos de Cosecha</p>
          <a href=" {{ route('tipos_cosecha.create')}} ">create</a>
          <ul>
            @forelse ($TiposCosecha as $tc)
            {{-- var_dump($tc) --}}
            <p>{{ $tc->display_name }}</p>
            <a href="{{ route('tipos_cosecha.show', $tc->id) }}">show</a>
            <a href="{{ route('tipos_cosecha.edit', $tc->id) }}">edit</a>
            <form action="{{ route('tipos_cosecha.destroy', ['id' => $tc->id]) }}" method="POST" class="no-margin">
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
