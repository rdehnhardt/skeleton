@extends('back.app')

@section('title', trans('base.system') . ' » ' . trans('base.users') . ' » ' . trans('actions.edit'))

@section('page-actions')
    <a href="{{ URL::previous() }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> {{ trans('actions.back') }}</a>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ trans('actions.edit') }}: "{{ $record->name }}"</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($record, ['route' => ['back.system.users.update', $record->id], 'method' => 'put']) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                {!! Form::openGroup('name', trans('dictionary.name')) !!}
                                {!! Form::text('name') !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                {!! Form::openGroup('email', trans('dictionary.email')) !!}
                                {!! Form::email('email') !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                {!! Form::openGroup('password', trans('dictionary.password')) !!}
                                {!! Form::password('password') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                {!! Form::openFormActions() !!}
                                {!! Form::button('<i class="fa fa-save"></i> '.trans('actions.save'), ['class' => 'btn btn-primary form-action', 'type' => 'submit']) !!}
                                {!! Form::closeFormActions() !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop