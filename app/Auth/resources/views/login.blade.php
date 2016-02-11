@extends('auth::layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-brand">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('auth::messages.login.title') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'post', 'route' => ['login']]) !!}

                    {!! Form::openGroup('email', trans('auth::messages.login.email')) !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}

                    {!! Form::openGroup('password', trans('auth::messages.login.password')) !!}
                    {!! Form::password('password') !!}
                    {!! Form::closeGroup() !!}

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('auth::messages.login.remember') }}
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> {{ trans('auth::messages.login.actions.login') }}
                        </button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">{{ trans('auth::messages.login.actions.forgot') }}</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

            <div class="text-center">
                <a class="btn btn-default btn-sm" href="{{ route('register') }}">{{ trans('auth::messages.login.actions.account') }}</a>
            </div>
        </div>
    </div>
@endsection
