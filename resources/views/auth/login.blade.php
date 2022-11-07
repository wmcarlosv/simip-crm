@extends('layouts.auth')

@section('content')
<div class="sufee-login  align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="page-login.html">
                    <img class="align-content" src="{{ asset('images/CRN.PNG') }}" alt="">
                </a>
            </div>
            <div class="login-form">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                            <label>Correo electronico</label>
                            <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Correo electronico" required>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                            </label>
                            <label class="pull-right">
                                <a href="#">Olvidaste la contraseña?</a>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30"> &nbsp; Iniciar sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
