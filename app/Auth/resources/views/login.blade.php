@extends('auth::app')

@section('content')
    <h3 class="text-center">{{ trans('dictionary.welcome') }}</h3>

    {!! Form::open() !!}

    <div class="no-label">
        {!! Form::openGroup('email', trans('dictionary.email')) !!}
        {!! Form::email('email', null, ['placeholder' => 'email@exemplo.com.br']) !!}
        {!! Form::closeGroup() !!}
    </div>

    <div class="no-label">
        {!! Form::openGroup('password', trans('dictionary.password')) !!}
        {!! Form::password('password', ['placeholder' => trans('dictionary.password')]) !!}
        {!! Form::closeGroup() !!}
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"/> {{ trans('dictionary.remember') }}
            </label>
        </div>
    </div>

    {!! Form::openFormActions() !!}
    {!! Form::submit(trans('dictionary.login'), ['class' => 'btn btn-primary btn-lg btn-block form-action']) !!}
    {!! Form::closeFormActions() !!}
    {!! Form::close() !!}

    <div class="login-actions">
        <a href="/password/email" class="btn btn-sm btn-block btn-default">
            <i class="fa fa-refresh"></i> {{ trans('dictionary.forgot-password') }}
        </a>
    </div>
    {!! Form::close() !!}
@stop