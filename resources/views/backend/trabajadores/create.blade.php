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
          <p>Create Trabajadores</p>
          <a href=" {{ route('trabajadores.index')}} ">index</a>
          
          <form action="{{ route('trabajadores.store') }}" method="post">
            {{ csrf_field() }}
            
            <label for="alias">alias</label>
            <input type="text" name="alias" value="{{ old('alias') }}">

            <label for="user_id">user_id</label>
            <input type="text" name="user_id" value="{{ old('user_id') }}">

            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ old('display_name') }}">
            
            <label for="description">description</label>
            <input type="text" name="description" value="{{ old('description') }}">
            
            <label for="apellido_paterno">apellido_paterno</label>
            <input type="text" name="apellido_paterno" value="{{ old('apellido_paterno') }}">
            
            <label for="apellido_materno">apellido_materno</label>
            <input type="text" name="apellido_materno" value="{{ old('apellido_materno') }}">
            
            <label for="fecha_nacimiento">fecha_nacimiento</label>
            <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
            
            <label for="rfc">rfc</label>
            <input type="text" name="rfc" value="{{ old('rfc') }}">
            
            <label for="curp">curp</label>
            <input type="text" name="curp" value="{{ old('curp') }}">
            
            <label for="seguro_social">seguro_social</label>
            <input type="text" name="seguro_social" value="{{ old('seguro_social') }}">
            
            <label for="calle">calle</label>
            <input type="text" name="calle" value="{{ old('calle') }}">
            
            <label for="poblacion">poblacion</label>
            <input type="text" name="poblacion" value="{{ old('poblacion') }}">
            
            <label for="telefono">telefono</label>
            <input type="text" name="telefono" value="{{ old('telefono') }}">
            
            <label for="celular">celular</label>
            <input type="text" name="celular" value="{{ old('celular') }}">
            
            <label for="telefono_emergencia">telefono_emergencia</label>
            <input type="text" name="telefono_emergencia" value="{{ old('telefono_emergencia') }}">
            
            <label for="parentesco_telefono_emergencia">parentesco_telefono_emergencia</label>
            <input type="text" name="parentesco_telefono_emergencia" value="{{ old('parentesco_telefono_emergencia') }}">
            
            <label for="fecha_ingreso">fecha_ingreso</label>
            <input type="date" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}">
            
            <label for="sueldo_base">sueldo_base</label>
            <input type="decimal" name="sueldo_base" value="{{ old('sueldo_base') }}">
            
            <label for="prestaciones">prestaciones</label>
            <input type="text" name="prestaciones" value="{{ old('prestaciones') }}">
            
            <label for="vacaciones">vacaciones</label>
            <input type="text" name="vacaciones" value="{{ old('vacaciones') }}">
            
            <label for="bonos">bonos</label>
            <input type="text" name="bonos" value="{{ old('bonos') }}">

            <input type="submit" value="submit">
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
