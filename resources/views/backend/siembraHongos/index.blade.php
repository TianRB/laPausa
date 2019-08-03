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
          <p>Index Siembra de Hongos</p>
          <a href=" {{ route('siembra_hongos.create')}} ">create</a>
          <ul>
            @forelse ($siembraHongos as $tc)
            {{-- var_dump($tc) --}}
            <p>{{ $tc->cultivo_id }}</p>
            <a href="{{ route('siembra_hongos.show', $tc->id) }}">show</a>
            <a href="{{ route('siembra_hongos.edit', $tc->id) }}">edit</a>
            <form action="{{ route('siembra_hongos.destroy', ['id' => $tc->id]) }}" method="POST" class="no-margin">
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
