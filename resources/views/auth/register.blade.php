@extends('auth.layout')

@section('content')
    <div class="register-box-body">
        <p class="login-box-msg">{{ trans('auth.register.title') }}</p>

        {!! Form::open() !!}

        {!! Form::openGroup('name', null, ['class' => 'has-feedback']) !!}
        {!! Form::text('name', null, ['placeholder' => trans('dictionary.full-name')]) !!}
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        {!! Form::closeGroup() !!}

        {!! Form::openGroup('email', null, ['class' => 'has-feedback']) !!}
        {!! Form::email('email', null, ['placeholder' => trans('dictionary.email')]) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        {!! Form::closeGroup() !!}

        {!! Form::openGroup('password', null, ['class' => 'has-feedback']) !!}
        {!! Form::password('password', ['placeholder' => trans('dictionary.password')]) !!}
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        {!! Form::closeGroup() !!}

        {!! Form::openGroup('password_confirmation', null, ['class' => 'has-feedback']) !!}
        {!! Form::password('password_confirmation', ['placeholder' => trans('auth.register.confirmation')]) !!}
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        {!! Form::closeGroup() !!}

        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> &nbsp; {!! trans('auth.register.terms', ['link' => '/terms']) !!}
                    </label>
                </div>
            </div>

            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('auth.register.submit') }}</button>
            </div>
        </div>
        {!! Form::close() !!}

        <a href="/login" class="text-center">{{ trans('auth.login.membership') }}</a>
    </div>
    <!--
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
        <span class="help-block">
        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
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
