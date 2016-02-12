@extends('back::app')

@section('page-name', 'system users')

@section('page-title')
    <h1>{{ trans('back::system.user.title') }}</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.system.users.index') }}" class="btn btn-default">
        <i class="fa fa-arrow-left"></i>
        {{ trans('back::dictionary.back') }}
    </a>
@stop

@section('content')
    <div class="panel panel-brand">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('back::system.user.create') }}</h3>
        </div>
        <div class="panel-body">
            {!! Form::open(['method' => 'post', 'route' => ['back.system.users.store']]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('name', trans('validation.attributes.name')) !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('email', trans('validation.attributes.email')) !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('password', trans('validation.attributes.password')) !!}
                    {!! Form::password('password') !!}
                    {!! Form::closeGroup() !!}
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-brand">
                    <i class="fa fa-floppy-o"></i>
                    {{ trans('back::dictionary.save') }}
                </button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop