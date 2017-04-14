@extends('layouts.auth')

@section('content')
    <form role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

        <div class="card">
            <div class="header text-center">Recuperar Senha</div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

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
            </div>
            <div class="footer text-center">
                <button type="submit" class="btn btn-fill btn-warning btn-wd">Enviar link para recuperação</button>
            </div>
            <div class="footer text-center">
                <a href="{{ route('login') }}">Voltar</a>
            </div>
        </div>
    </form>
@endsection

@section('page-scripts')
    <script type="text/javascript">
        $().ready(function () {
            lbd.checkFullPageBackgroundImage();

            setTimeout(function () {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endsection