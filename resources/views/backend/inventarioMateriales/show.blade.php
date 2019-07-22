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
          <p>show Inventario Materiales</p>
          <a href=" {{ route('inventario_materiales.index')}} ">index</a>
          <ul>
            <p>{{ $inventarioMaterial->cantidad }}</p>
            <a href="{{ route('inventario_materiales.show', $inventarioMaterial->id) }}">show</a>
            <a href="{{ route('inventario_materiales.edit', $inventarioMaterial->id) }}">edit</a>
            <form action="{{ route('inventario_materiales.destroy', ['id' => $inventarioMaterial->id]) }}" method="POST" class="no-margin">
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
