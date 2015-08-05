@extends('auth::app')

@section('content')
    <h3 class="text-center">E-Mail Address</h3>

    {!! Form::open(['to' => url('/password/email')]) !!}

    <div class="no-label">
        {!! Form::openGroup('email', 'Email') !!}
        {!! Form::email('email', null, ['placeholder' => 'email@exemplo.com.br']) !!}
        {!! Form::closeGroup() !!}
    </div>

    {!! Form::openFormActions() !!}
    {!! Form::submit('Send Password Reset Link', ['class' => 'btn btn-primary btn-lg btn-block form-action']) !!}
    {!! Form::closeFormActions() !!}
    {!! Form::close() !!}

    <div class="login-actions">
        <a href="/auth/login" class="btn btn-sm btn-block btn-default"><i class="fa fa-refresh"></i> Login</a>
    </div>
@stop