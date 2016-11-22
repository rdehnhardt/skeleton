@extends('auth.layout')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">Reset Password</p>

        {!! Form::open() !!}

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
                <div class="col-xs-5">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('auth.reset.submit') }}</button>
                </div>
            </div>
        {!! Form::close() !!}

        <hr />

        <p><a href="/login" class="text-center">{{ trans('auth.login.membership') }}</a></p>

        @if (config('auth.register'))
            <p><a href="/register" class="text-center">{{ trans('auth.register.title') }}</a></p>
        @endif
    </div>
    <!--
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reset Password</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Reset Password
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
