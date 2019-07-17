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
          <p>show Animal</p>
          <a href=" {{ route('animales.index')}} ">index</a>
          <ul>
            <p>{{ $animal->display_name }}</p>
            <a href="{{ route('animales.show', $animal->id) }}">show</a>
            <a href="{{ route('animales.edit', $animal->id) }}">edit</a>
            <form action="{{ route('animales.destroy', ['id' => $animal->id]) }}" method="POST" class="no-margin">
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
