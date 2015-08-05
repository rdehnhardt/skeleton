@extends('auth::app')

@section('content')
    <h3 class="text-center">Welcome!</h3>

    {!! Form::open() !!}

    <div class="no-label">
        {!! Form::openGroup('email', 'Email') !!}
        {!! Form::email('email', null, ['placeholder' => 'email@exemplo.com.br']) !!}
        {!! Form::closeGroup() !!}
    </div>

    <div class="no-label">
        {!! Form::openGroup('password', 'Senha') !!}
        {!! Form::password('password', ['placeholder' => 'senha']) !!}
        {!! Form::closeGroup() !!}
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember"/> Remember Me
            </label>
        </div>
    </div>

    {!! Form::openFormActions() !!}
    {!! Form::submit('Login', ['class' => 'btn btn-primary btn-lg btn-block form-action']) !!}
    {!! Form::closeFormActions() !!}
    {!! Form::close() !!}

    <div class="login-actions">
        <a href="/password/email" class="btn btn-sm btn-block btn-default"><i class="fa fa-refresh"></i> Forgot Your
            Password?</a>
    </div>
    {!! Form::close() !!}
@stop