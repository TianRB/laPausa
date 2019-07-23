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
          <p>Create Cat Materiales</p>
          <a href=" {{ route('catalogo_materiales.index')}} ">index</a>
          
          <form action="{{ route('catalogo_materiales.store') }}" method="post">
            {{ csrf_field() }}
            
            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ old('display_name') }}">

            <label for="description">description</label>
            <input type="text" name="description" value="{{ old('description') }}">

            <label for="marca">marca</label>
            <input type="text" name="marca" value="{{ old('marca') }}">
            
            <label for="proveedor_id">proveedor_id</label>
            <input type="text" name="proveedor_id" value="{{ old('proveedor_id') }}">
            
            <label for="categoria">categoria</label>
            <input type="text" name="categoria" value="{{ old('categoria') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
