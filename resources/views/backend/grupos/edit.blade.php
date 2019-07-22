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
          <p>Edit grupos</p>
          <a href=" {{ route('grupos.index')}} ">index</a>
          
          <form action="{{ route('grupos.update', $grupo->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />

            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ $grupo->display_name }}">
            
            <label for="description">description (optional)</label>
            <input type="text" name="description" value="{{ $grupo->description }}">
            
            <label for="distancia_entre_arboles">distancia_entre_arboles</label>
            <input type="text" name="distancia_entre_arboles" value="{{ $grupo->distancia_entre_arboles }}">
            
            <label for="rango_de_edad">rango_de_edad</label>
            <input type="text" name="rango_de_edad" value="{{ $grupo->rango_de_edad }}">
            
            <label for="enfermedades_o_plagas">enfermedades_o_plagas NOTA ESTA ES LLAVE FORANEA</label>
            <input type="text" name="enfermedades_o_plagas" value="{{ $grupo->enfermedades_o_plagas }}">
            
            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
