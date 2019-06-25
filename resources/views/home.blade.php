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
                    <ul>
                        <li><a href="{{ route('tipos_cultivo.index') }}">Tipos Cultivo</a></li>
                        <li><a href="{{ route('familias.index') }}">Familias</a></li>
                        <li><a href="{{ route('tipos_cosecha.index') }}">Tipos de Cosecha</a></li>
                        <li><a href="{{ route('tipos_siembra.index') }}">Tipos de Siembra</a></li>
                        <li><a href="{{ route('proveedores.index') }}">Proveedores</a></li>
                        <li><a href="{{ route('enfermedades_y_plagas.index') }}">Enfermedades y plagas</a></li>
                        <li><a href="{{ route('areas.index') }}">Areas</a></li>
                        <li><a href="{{ route('biocamas.index') }}">Biocamas</a></li>
                        <li><a href="{{ route('grupos.index') }}">Grupos</a></li>
                        <li><a href="{{ route('cultivos.index') }}">Cultivos</a></li>
                        <li><a href="{{ route('catalogo_animales.index') }}">Catalogo de Animales</a></li>
                        <li><a href="{{ route('animales.index') }}">Animales</a></li>
                        <li><a href="{{ route('cat_herr_maq.index') }}">Catalogo Herramienta y Maquinaria</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
