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
          <p>show Cat Materiales</p>
          <a href=" {{ route('catalogo_materiales.index')}} ">index</a>
          <ul>
            <p>{{ $catalogoMaterial->display_name }}</p>
            <a href="{{ route('catalogo_materiales.show', $catalogoMaterial->id) }}">show</a>
            <a href="{{ route('catalogo_materiales.edit', $catalogoMaterial->id) }}">edit</a>
            <form action="{{ route('catalogo_materiales.destroy', ['id' => $catalogoMaterial->id]) }}" method="POST" class="no-margin">
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
