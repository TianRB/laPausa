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
          <p>show registro_materiales</p>
          <a href=" {{ route('registro_materiales.index')}} ">index</a>
          <ul>
            <p>{{ $registroMaterial->display_name }}</p>
            <p>{{ $registroMaterial->direccion }}</p>
            <p>{{ $registroMaterial->cp }}</p>
            <a href="{{ route('registro_materiales.show', $registroMaterial->id) }}">show</a>
            <a href="{{ route('registro_materiales.edit', $registroMaterial->id) }}">edit</a>
            <form action="{{ route('registro_materiales.destroy', ['id' => $registroMaterial->id]) }}" method="POST" class="no-margin">
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
