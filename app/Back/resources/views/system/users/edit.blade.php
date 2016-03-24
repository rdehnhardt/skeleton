@extends('back::layout.app')

@section('page-name', 'system users')

@section('page-title')
    <h1>{{ _ucwords(trans('back::system.user.edit', ['name' => $record->name])) }}</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.system.users.index') }}" class="btn btn-default">
        <i class="fa fa-arrow-left"></i> {{ _ucwords(trans('back::dictionary.back')) }}
    </a>
@stop

@section('content')
    {!! Form::model($record, ['route' => ['back.system.users.update', $record->id], 'method' => 'put']) !!}
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('back::dictionary.filter') }}</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    {!! Form::openGroup('name', ucfirst(trans('validation.attributes.name'))) !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    {!! Form::openGroup('email', ucfirst(trans('validation.attributes.email'))) !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    {!! Form::openGroup('role', ucfirst(trans('validation.attributes.role'))) !!}
                    {!! Form::text('role') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    {!! Form::openGroup('password', ucfirst(trans('validation.attributes.password'))) !!}
                    {!! Form::password('password') !!}
                    {!! Form::closeGroup() !!}
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-flat btn-primary">
                <i class="fa fa-floppy-o"></i> {{ trans('back::dictionary.save') }}
            </button>
        </div>
    </div>
    {!! Form::close() !!}
@stop