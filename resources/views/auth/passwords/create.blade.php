@extends('layouts.auth')

@section('content')
    <form role="form" method="POST" action="{{ route('register.password', ['token' => $token]) }}">
        <input type="hidden" name="token" value="{{ $token }}">
        {{ csrf_field() }}

        <div class="card">
            <div class="header text-center">Criar Senha</div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="content">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Nova senha</label>
                    <input type="password" id="password" name="password" placeholder="Nova senha" class="form-control">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirmation">Repetir Senha</label>
                    <input type="password" id="password-confirmation" name="password_confirmation" placeholder="Nova senha" class="form-control">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="footer text-center">
                <button type="submit" class="btn btn-fill btn-warning btn-wd">Criar senha</button>
            </div>
        </div>
    </form>
@endsection

@section('page-scripts')
    <script type="text/javascript">
        $().ready(function () {
            lbd.checkFullPageBackgroundImage();

            setTimeout(function () {
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>
@endsection