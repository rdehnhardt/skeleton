@extends('auth.layout')

@section('content')
    <div class="login-box-body">
        <p class="login-box-msg">{{ trans('auth.forgot.title') }}</p>

        {!! Form::open() !!}

        {!! Form::openGroup('email', null, ['class' => 'has-feedback']) !!}
        {!! Form::email('email', null, ['placeholder' => trans('dictionary.email')]) !!}
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        {!! Form::closeGroup() !!}

            <div class="row">
                <div class="col-xs-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('auth.forgot.submit') }}</button>
                </div>
            </div>
        {!! Form::close() !!}

        <p>
            <a href="/login" class="text-center">{{ trans('auth.login.membership') }}</a> <br />

            @if (config('auth.register'))
                <a href="/register" class="text-center">{{ trans('auth.register.title') }}</a>
            @endif
        </p>
    </div>
    <!--
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reset Password</div>
                    <div class="panel-body">
                        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
        <span class="help-block">
        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Send Password Reset Link
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
-->
@endsection
