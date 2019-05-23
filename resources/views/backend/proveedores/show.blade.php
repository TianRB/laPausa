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
          <p>show Proveedores</p>
          <a href=" {{ route('proveedores.index')}} ">index</a>
          <ul>
            <p>{{ $proveedor->display_name }}</p>
            <p>{{ $proveedor->direccion }}</p>
            <p>{{ $proveedor->cp }}</p>
            <a href="{{ route('proveedores.show', $proveedor->id) }}">show</a>
            <a href="{{ route('proveedores.edit', $proveedor->id) }}">edit</a>
            <form action="{{ route('proveedores.destroy', ['id' => $proveedor->id]) }}" method="POST" class="no-margin">
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
