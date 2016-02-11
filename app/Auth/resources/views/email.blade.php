@extends('auth::layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-brand">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('auth::messages.email.title') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'post', 'route' => ['password.email']]) !!}

                    {!! Form::openGroup('email', trans('auth::messages.email.email')) !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-envelope"></i> {{ trans('auth::messages.email.actions.send') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('login') }}">{{ trans('auth::messages.email.actions.back') }}</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
