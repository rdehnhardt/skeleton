@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <form role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="card card-hidden">
            <div class="header text-center">Acesso Restrito</div>
            <div class="content">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Endereço de email</label>
                    <input type="email" id="email" name="email" placeholder="Insira seu email" class="form-control" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Senha" class="form-control">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} data-toggle="checkbox">
                        Lembrar Senha
                    </label>
                </div>
            </div>
            <div class="footer text-center">
                <button type="submit" class="btn btn-fill btn-warning btn-wd">Acessar</button>
            </div>
            <div class="footer text-center">
                <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
            </div>
        </div>
    </form>
@endsection
