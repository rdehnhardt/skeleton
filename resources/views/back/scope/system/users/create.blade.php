@extends('back.app')

@section('title', 'System » Users » Create')

@section('page-actions')
    <a href="{{ URL::previous() }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create a bar</h3>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(['method' => 'post', 'route' => ['back.system.users.store']]) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                {!! Form::openGroup('name', 'Name') !!}
                                {!! Form::text('name', null, ['placeholder' => 'Set user name']) !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                {!! Form::openGroup('password', 'Password') !!}
                                {!! Form::email('email', null, ['placeholder' => 'Set user email']) !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                {!! Form::openGroup('password', 'Password') !!}
                                {!! Form::password('password', ['placeholder' => 'Set user password']) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                {!! Form::openFormActions() !!}
                                {!! Form::button('<i class="fa fa-save"></i> Create', ['class' => 'btn btn-primary form-action']) !!}
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