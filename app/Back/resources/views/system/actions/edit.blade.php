@extends('back::system.module')

@section('page-name', 'actions')

@section('page-title', 'Actions » Create')

@section('page-actions')
    <a href="{{ route('back.system.actions.index') }}" class="btn btn-brand"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">Create action</h4>

            {!! Form::model($record, ['route' => ['back.system.users.update', $record->id], 'method' => 'put']) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    {!! Form::openGroup('type', 'Type') !!}
                    {!! Form::select('type', ['get' => 'GET', 'post' => 'POST', 'put' => 'PUT', 'delete' => 'DELETE']) !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    {!! Form::openGroup('uri', 'URI') !!}
                    {!! Form::text('uri') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    {!! Form::openGroup('name', 'Name') !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    {!! Form::openGroup('controller', 'Controller') !!}
                    {!! Form::text('controller') !!}
                    {!! Form::closeGroup() !!}
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop