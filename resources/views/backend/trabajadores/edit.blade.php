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
          <p>Edit Trabajadores</p>
          <a href=" {{ route('trabajadores.index')}} ">index</a>
          
          <form action="{{ route('trabajadores.update', $trabajador->id) }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT" />
            <label for="alias">alias</label>
            <input type="text" name="alias" value="{{ $trabajador->alias }}">
            
            <label for="user_id">user_id</label>
            <input type="text" name="user_id" value="{{ $trabajador->user_id }}">
            
            <label for="display_name">display_name</label>
            <input type="text" name="display_name" value="{{ $trabajador->display_name }}">
            
            <label for="description">description</label>
            <input type="text" name="description" value="{{ $trabajador->description }}">
            
            <label for="apellido_paterno">apellido_paterno</label>
            <input type="text" name="apellido_paterno" value="{{ $trabajador->apellido_paterno }}">
            
            <label for="apellido_materno">apellido_materno</label>
            <input type="text" name="apellido_materno" value="{{ $trabajador->apellido_materno }}">
            
            <label for="fecha_nacimiento">fecha_nacimiento</label>
            <input type="date" name="fecha_nacimiento" value="{{ $trabajador->fecha_nacimiento }}">
            
            <label for="rfc">rfc</label>
            <input type="text" name="rfc" value="{{ $trabajador->rfc }}">
            
            <label for="curp">curp</label>
            <input type="text" name="curp" value="{{ $trabajador->curp }}">
            
            <label for="seguro_social">seguro_social</label>
            <input type="text" name="seguro_social" value="{{ $trabajador->seguro_social }}">
            
            <label for="calle">calle</label>
            <input type="text" name="calle" value="{{ $trabajador->calle }}">
            
            <label for="poblacion">poblacion</label>
            <input type="text" name="poblacion" value="{{ $trabajador->poblacion }}">
            
            <label for="telefono">telefono</label>
            <input type="text" name="telefono" value="{{ $trabajador->telefono }}">
            
            <label for="celular">celular</label>
            <input type="text" name="celular" value="{{ $trabajador->celular }}">
            
            <label for="telefono_emergencia">telefono_emergencia</label>
            <input type="text" name="telefono_emergencia" value="{{ $trabajador->telefono_emergencia }}">
            
            <label for="parentesco_telefono_emergencia">parentesco_telefono_emergencia</label>
            <input type="text" name="parentesco_telefono_emergencia" value="{{ $trabajador->parentesco_telefono_emergencia }}">
            
            <label for="fecha_ingreso">fecha_ingreso</label>
            <input type="date" name="fecha_ingreso" value="{{ $trabajador->fecha_ingreso }}">
            
            <label for="sueldo_base">sueldo_base</label>
            <input type="decimal" name="sueldo_base" value="{{ $trabajador->sueldo_base }}">
            
            <label for="prestaciones">prestaciones</label>
            <input type="text" name="prestaciones" value="{{ $trabajador->prestaciones }}">
            
            <label for="vacaciones">vacaciones</label>
            <input type="text" name="vacaciones" value="{{ $trabajador->vacaciones }}">
            
            <label for="bonos">bonos</label>
            <input type="text" name="bonos" value="{{ $trabajador->bonos }}">

            <input type="submit" value="submit">
          </form>
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
