@extends('auth.layout')

@section('title', trans('dictionary.register'))

@section('content')
    {!! Form::open(['method' => 'post', 'route' => ['register']]) !!}
    <div class="card {{ !$errors->isEmpty() ?: 'card-hidden' }}">
        <div class="header text-center">{{ trans('dictionary.register') }}</div>

        <div class="content-no-padding padding-h-20">
            {!! Form::openGroup('name', trans('dictionary.name')) !!}
            {!! Form::text('name') !!}
            {!! Form::closeGroup() !!}

            {!! Form::openGroup('email', trans('dictionary.email')) !!}
            {!! Form::email('email') !!}
            {!! Form::closeGroup() !!}

            {!! Form::openGroup('password', trans('dictionary.password')) !!}
            {!! Form::password('password') !!}
            {!! Form::closeGroup() !!}

            {!! Form::openGroup('password_confirmation', trans('auth.password-confirmation')) !!}
            {!! Form::password('password_confirmation') !!}
            {!! Form::closeGroup() !!}
        </div>

        <div class="footer text-center">
            <button class="btn btn-fill btn-primary btn-wd">{{ trans('dictionary.register') }}</button>
        </div>

        <div class="footer text-center">
            <a href="{{ route('login') }}">{{ trans('dictionary.login') }}</a>
        </div>
    </div>
    {!! Form::close() !!}
@endsection