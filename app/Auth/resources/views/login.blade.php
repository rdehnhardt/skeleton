@extends('auth::app')

@section('content')
    <p class="login-box-msg">{{ _ucwords(trans('auth::messages.login.title')) }}</p>

    {!! Form::open(['method' => 'post', 'route' => ['login']]) !!}
    {!! Form::openGroup('email', _ucwords(trans('validation.attributes.email'))) !!}
    {!! Form::text('email') !!}
    {!! Form::closeGroup() !!}
    {!! Form::openGroup('password', _ucwords(trans('validation.attributes.password'))) !!}
    {!! Form::password('password') !!}
    {!! Form::closeGroup() !!}

    <button type="submit" class="btn btn-primary btn-block btn-flat">
        {{ _ucwords(trans('auth::messages.login.actions.login')) }}
    </button>

    {!! Form::close() !!}

    <div class="login-actions">
        <a href="{{ url('/password/reset') }}" class="btn btn-default btn-block btn-flat">
            {{ _ucwords(trans('auth::messages.login.actions.forgot')) }}
        </a>
        <a href="{{ route('register') }}" class="btn btn-default btn-block btn-flat">
            {{ _ucwords(trans('auth::messages.login.actions.account')) }}
        </a>
    </div>
@endsection
