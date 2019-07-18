 @extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-6 p-0">
            <img src="{{ asset('img/fondo_inicio.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-6">
            <div class="row justify-content-center py-5">
                <div class="col-6 text-center">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                        <h2 class="text-center text-dark bold brand-name">
                            Rancho <br>
                            La Pausa
                        </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">                        
                        <form class="form-horizontal row lp-login" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
        
                                <div class="col-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class=" control-label">E-Mail</label>
        
                                    <div class="">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="col-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class=" control-label">Contraseña</label>
        
                                    <div class="">
                                        <input id="password" type="password" class="form-control" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="col-12 form-group">
                                    <div class="row justify-content-around align-items-center1">
                                        <div class="checkbox p-2">
                                            <label class="m-0">
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar datos
                                            </label>
                                        </div>
                                        
                                        <a class="btn btn-link text-dark" href="{{ route('password.request') }}">
                                                ¿Olvidaste tu contraseña?
                                            </a>
                                    </div>
                                </div>
        
                                <div class="col-6 form-group text-center">
                                    <button type="submit" class="btn btn-lg btn-primary bc-primary">
                                        Iniciar Sesión
                                    </button>                                        
                                </div>
                                <div class="col-6 text-center">
                                        <a href="{{ route('register') }}" class="btn btn-lg bc-bborder">Crear Cuenta</a>               
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
