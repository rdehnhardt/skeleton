@extends('auth.layout')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">{{ trans('auth.login.title') }}</p>

        {!! Form::open() !!}

        {!! Form::openGroup('email', null, ['class' => 'has-feedback']) !!}
        {!! Form::email('email', null, ['placeholder' => trans('dictionary.email')]) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        {!! Form::closeGroup() !!}

        {!! Form::openGroup('password', null, ['class' => 'has-feedback']) !!}
        {!! Form::password('password', ['placeholder' => trans('dictionary.password')]) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        {!! Form::closeGroup() !!}

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> &nbsp; {{ trans('dictionary.remember') }}
                    </label>
                </div>
            </div>

            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('auth.login.submit') }}</button>
            </div>
        </div>
        {!! Form::close() !!}

        <hr />

        <p><a href="/password/reset">{{ trans('auth.forgot.title') }}</a></p>

        @if (config('auth.register'))
            <p><a href="/register" class="text-center">{{ trans('auth.register.title') }}</a></p>
        @endif
    </div>
    <!--
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
        <span class="help-block">
    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
        <span class="help-block">
        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
@endsection
