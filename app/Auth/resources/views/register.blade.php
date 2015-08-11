@extends('auth::app')

@section('content')
    <h3 class="text-center">Register</h3>

    {!! Form::open() !!}

    <div class="no-label">
        {!! Form::openGroup('name', 'Name') !!}
        {!! Form::text('name', null, ['placeholder' => 'Your Name']) !!}
        {!! Form::closeGroup() !!}
    </div>

    <div class="no-label">
        {!! Form::openGroup('email', 'Email') !!}
        {!! Form::email('email', null, ['placeholder' => 'email@exemplo.com.br']) !!}
        {!! Form::closeGroup() !!}
    </div>

    <div class="no-label">
        {!! Form::openGroup('password', 'Password') !!}
        {!! Form::password('password', ['placeholder' => 'Yor Password']) !!}
        {!! Form::closeGroup() !!}
    </div>

    <div class="no-label">
        {!! Form::openGroup('password_confirmation', 'Confirm Password') !!}
        {!! Form::password('password_confirmation', ['placeholder' => 'Confirm Yor Password']) !!}
        {!! Form::closeGroup() !!}
    </div>

    {!! Form::openFormActions() !!}
    {!! Form::submit('Register', ['class' => 'btn btn-primary btn-lg btn-block form-action']) !!}
    {!! Form::closeFormActions() !!}
    {!! Form::close() !!}

    <div class="login-actions">
        <a href="/auth/login" class="btn btn-sm btn-block btn-default"><i class="fa fa-refresh"></i> Login</a>
    </div>
@stop