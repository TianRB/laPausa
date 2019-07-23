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
          <p>Edit Cat Materiales</p>
          <a href=" {{ route('catalogo_materiales.index')}} ">index</a>
          
          <form action="{{ route('catalogo_materiales.update', $catalogoMaterial->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />
 
            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ $catalogoMaterial->display_name }}">
            
            <label for="description">description</label>
            <input type="text" name="description" value="{{ $catalogoMaterial->description }}">
            
            <label for="marca">marca</label>
            <input type="text" name="marca" value="{{ $catalogoMaterial->marca }}">
            
            <label for="proveedor_id">proveedor_id</label>
            <input type="text" name="proveedor_id" value="{{ $catalogoMaterial->proveedor_id }}">
            
            <label for="categoria">categoria</label>
            <input type="text" name="categoria" value="{{ $catalogoMaterial->categoria }}">

            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
