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
          <p>show herramienta y maquinaria</p>
          <a href=" {{ route('registro_combustible.index')}} ">index</a>
          <ul>
            <p>{{ $registroCombustible->litros_cargados }}</p>
            <a href="{{ route('registro_combustible.show', $registroCombustible->id) }}">show</a>
            <a href="{{ route('registro_combustible.edit', $registroCombustible->id) }}">edit</a>
            <form action="{{ route('registro_combustible.destroy', ['id' => $registroCombustible->id]) }}" method="POST" class="no-margin">
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
