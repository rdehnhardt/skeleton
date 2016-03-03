@extends('back::layout.app')

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
    {!! Form::open(['method' => 'post', 'route' => ['back.system.users.store']]) !!}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('back::dictionary.filter') }}</h3>
        </div>
        <div class="box-body">
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
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-flat btn-primary">
                <i class="fa fa-floppy-o"></i> {{ trans('back::dictionary.save') }}
            </button>

            <a href="{{ route('back.system.users.index') }}" type="button" class="btn btn-flat btn-default" data-toggle="tooltip" title="{{ trans('back::dictionary.new') }}">
                <i class="fa fa-arrow-left"></i> &nbsp; {{ trans('back::dictionary.back') }}
            </a>
        </div>
    </div>
    {!! Form::close() !!}
@stop