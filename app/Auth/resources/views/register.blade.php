@extends('auth::app')

@section('content')
    <p class="login-box-msg">{{ trans('auth::messages.register.title') }}</p>

    {!! Form::open(['method' => 'post', 'route' => ['password.email']]) !!}

    {!! Form::openGroup('name', trans('validation.attributes.name')) !!}
    {!! Form::text('name') !!}
    {!! Form::closeGroup() !!}

    {!! Form::openGroup('email', trans('validation.attributes.email')) !!}
    {!! Form::text('email') !!}
    {!! Form::closeGroup() !!}

    {!! Form::openGroup('password', trans('validation.attributes.password')) !!}
    {!! Form::password('password') !!}
    {!! Form::closeGroup() !!}

    {!! Form::openGroup('password_confirmation', trans('auth::messages.register.confirm_password')) !!}
    {!! Form::password('password_confirmation') !!}
    {!! Form::closeGroup() !!}

    <button type="submit" class="btn btn-primary btn-block btn-flat">
        {{ trans('auth::messages.register.actions.register') }}
    </button>

    {!! Form::close() !!}

    <div class="login-actions">
        <a class="btn btn-default btn-block btn-flat" href="{{ route('login') }}">
            {{ trans('auth::messages.email.actions.back') }}
        </a>
    </div>
@endsection
