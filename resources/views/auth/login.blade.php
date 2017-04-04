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
                        <input type="checkbox" name="remember"> &nbsp; {{ trans('dictionary.remember') }}
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
@endsection
