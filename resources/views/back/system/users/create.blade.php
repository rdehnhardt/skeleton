@extends('back.layout')

@section('title', trans('back.system.users.title'))

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/back"><i class="fa fa-dashboard"></i> {{ trans('back.home.title') }}</a></li>
        <li><a href="/back/system">{{ trans('back.system.title') }}</a></li>
        <li><a href="/back/system/users">{{ trans('back.system.users.title') }}</a></li>
        <li class="active">{{ trans('back.common.add') }}</li>
    </ol>
@endsection

@section('content')
    <div class="text-right">
        <a href="/back/system/users" class="btn btn-default btn-flat margin-bottom">{{ trans('back.common.back') }}</a>
    </div>

    {!! Form::open(['method' => 'post', 'route' => ['users.store']]) !!}

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('back.system.users.create') }}</h3>
        </div>

        <div class="box-body">
            <div class="row">
            	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    {!! Form::openGroup('name', trans('back.common.name'), ['class' => 'has-feedback']) !!}
                    {!! Form::text('name', null, ['placeholder' => trans('back.common.name')]) !!}
                    {!! Form::closeGroup() !!}
            	</div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    {!! Form::openGroup('email', trans('back.common.email'), ['class' => 'has-feedback']) !!}
                    {!! Form::email('email', null, ['placeholder' => trans('back.common.email')]) !!}
                    {!! Form::closeGroup() !!}
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    {!! Form::openGroup('password', trans('back.common.password'), ['class' => 'has-feedback']) !!}
                    {!! Form::password('password', ['placeholder' => trans('back.common.password')]) !!}
                    {!! Form::closeGroup() !!}
                </div>
            </div>
        </div>

        <div class="box-footer clearfix">
            <button type="submit" class="btn btn-primary btn-flat">{{ trans('back.common.save') }}</button>
        </div>
    </div>

    {!! Form::close() !!}
@endsection
