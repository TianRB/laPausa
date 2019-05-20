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
          <p>show Familias</p>
          <a href=" {{ route('familias.index')}} ">index</a>
          <ul>
            <p>{{ $familia->display_name }}</p>
            <a href="{{ route('familias.show', $familia->id) }}">show</a>
            <a href="{{ route('familias.edit', $familia->id) }}">edit</a>
            <form action="{{ route('familias.destroy', ['id' => $familia->id]) }}" method="POST" class="no-margin">
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
