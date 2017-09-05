@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    {!! Form::open(['method' => 'post', 'route' => ['login']]) !!}
        <div class="card {{ !$errors->isEmpty() ?: 'card-hidden' }}">
            <div class="header text-center">Acesso Restrito</div>

            <div class="content padding-h-40">
                {!! Form::openGroup('email', 'Email Address') !!}
                {!! Form::email('email', null, ['placeholder' => 'Type your email address']) !!}
                {!! Form::closeGroup() !!}

                {!! Form::openGroup('password', 'Your Password') !!}
                {!! Form::password('password', ['placeholder' => 'Type your password']) !!}
                {!! Form::closeGroup() !!}

                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} data-toggle="checkbox">
                        Remember Password
                    </label>
                </div>
            </div>

            <div class="footer text-center">
                <button type="submit" class="btn btn-fill btn-primary btn-wd">Acessar</button>
            </div>

            <div class="footer text-center">
                <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
            </div>
        </div>
    {!! Form::close() !!}
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