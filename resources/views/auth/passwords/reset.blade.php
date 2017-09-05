@extends('auth.layout')

@section('title', trans('auth.reset-password'))

@section('content')
    {!! Form::open(['method' => 'post', 'route' => ['password.request']]) !!}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="card {{ !$errors->isEmpty() ?: 'card-hidden' }}">
            <div class="header text-center">{{ trans('auth.reset-password') }}</div>

            <div class="content-no-padding padding-h-40">
                {!! Form::openGroup('email', trans('dictionary.email')) !!}
                {!! Form::email('email', null) !!}
                {!! Form::closeGroup() !!}

                {!! Form::openGroup('password', trans('dictionary.password')) !!}
                {!! Form::password('password') !!}
                {!! Form::closeGroup() !!}

                {!! Form::openGroup('password_confirmation', trans('auth.password-confirmation')) !!}
                {!! Form::password('password_confirmation') !!}
                {!! Form::closeGroup() !!}
            </div>

            <div class="footer text-center">
                <button class="btn btn-fill btn-primary btn-wd">{{ trans('auth.reset-password') }}</button>
            </div>

            <div class="footer text-center">
                <a href="{{ route('login') }}">{{ trans('dictionary.login') }}</a>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
