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
          <p>Index mantenimientos y reparaciones</p>
          <a href=" {{ route('mantenimiento_y_reparaciones.create')}} ">create</a>
          <ol>
            @forelse ($mantenimientosReparaciones as $tc)
            <li>
              {{-- var_dump($tc) --}}
              <p>{{ $tc->mantenimiento_o_reparacion }}</p>
              <a href="{{ route('mantenimiento_y_reparaciones.show', $tc->id) }}">show</a>
              <a href="{{ route('mantenimiento_y_reparaciones.edit', $tc->id) }}">edit</a>
              <form action="{{ route('mantenimiento_y_reparaciones.destroy', ['id' => $tc->id]) }}" method="POST" class="no-margin">
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
