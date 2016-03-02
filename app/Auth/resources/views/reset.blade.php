@extends('auth::app')

@section('content')
    <p class="login-box-msg">{{ trans('auth::messages.reset.title') }}</p>

    {!! Form::open(['method' => 'post', 'route' => ['password.reset.post']]) !!}

    {!! Form::openGroup('email', trans('auth::messages.reset.email')) !!}
    {!! Form::text('email') !!}
    {!! Form::closeGroup() !!}

    {!! Form::openGroup('password', trans('auth::messages.reset.password')) !!}
    {!! Form::password('password') !!}
    {!! Form::closeGroup() !!}

    {!! Form::openGroup('password_confirmation', trans('auth::messages.reset.confirm_password')) !!}
    {!! Form::password('password_confirmation') !!}
    {!! Form::closeGroup() !!}

    <button type="submit" class="btn btn-primary btn-block btn-flat">
        {{ trans('auth::messages.reset.actions.reset') }}
    </button>

    {!! Form::close() !!}

    <div class="login-actions">
        <a class="btn btn-default btn-block btn-flat" href="{{ route('login') }}">
            {{ trans('auth::messages.email.actions.back') }}
        </a>
    </div>
@endsection
