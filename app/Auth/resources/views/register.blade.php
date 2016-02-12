@extends('auth::layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-brand">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('auth::messages.register.title') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'post', 'route' => ['register']]) !!}

                    {!! Form::openGroup('name', trans('validation.attributes.name')) !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}

                    {!! Form::openGroup('email', trans('validation.attributes.email')) !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}

                    {!! Form::openGroup('password', trans('validation.attributes.password')) !!}
                    {!! Form::password('password') !!}
                    {!! Form::closeGroup() !!}

                    {!! Form::openGroup('password_confirmation', trans('auth::messages.register.confirm_password')) !!}
                    {!! Form::password('password_confirmation') !!}
                    {!! Form::closeGroup() !!}

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i> {{ trans('auth::messages.register.actions.register') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('login') }}">{{ trans('auth::messages.register.actions.back') }}</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
