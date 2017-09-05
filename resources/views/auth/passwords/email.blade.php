@extends('auth.layout')

@section('title', trans('auth.reset-password'))

@section('content')
    {!! Form::open(['method' => 'post', 'route' => ['password.email']]) !!}
        <div class="card {{ !$errors->isEmpty() ?: 'card-hidden' }}">
            <div class="header text-center">{{ trans('auth.reset-password') }}</div>

            <div class="content-no-padding padding-h-40">
                {!! Form::openGroup('email', trans('dictionary.email')) !!}
                {!! Form::email('email', null) !!}
                {!! Form::closeGroup() !!}
            </div>

            <div class="footer text-center">
                <button class="btn btn-fill btn-primary btn-wd">{{ trans('auth.send-link') }}</button>
            </div>

            <div class="footer text-center">
                <a href="{{ route('login') }}">{{ trans('dictionary.login') }}</a>
            </div>
        </div>
    {!! Form::close() !!}
@endsection
