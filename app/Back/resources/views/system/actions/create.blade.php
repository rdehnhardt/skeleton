@extends('back::system.module')

@section('page-name', 'actions')

@section('page-title', 'Actions » Create')

@section('page-actions')
    <a href="{{ route('back.system.users.index') }}" class="btn btn-brand"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="card-title">Create user</h4>

            {!! Form::open(['method' => 'post', 'route' => ['back.system.users.store']]) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('name', 'Name') !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    {!! Form::openGroup('type', 'Type') !!}
                    {!! Form::select('type', ) !!}
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