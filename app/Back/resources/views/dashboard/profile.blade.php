@extends('back::layout.app')

@section('page-name', 'system users')

@section('page-title')
    <h1>{{ trans('back::dashboard.profile.title') }}</h1>
@stop

@section('content')
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-centered">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="/img/avatars/128/128/{{ Auth::user()->getImage() }}" alt="{{ Auth::user()->name }}">
                    <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                    <p class="text-muted text-center">{{ Auth::user()->role }}</p>

                    {!! Form::model(Auth::user(), ['route' => ['post.profile'], 'method' => 'post', 'files' => true]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('name', trans('validation.attributes.name')) !!}
                            {!! Form::text('name') !!}
                            {!! Form::closeGroup() !!}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('email', trans('validation.attributes.email')) !!}
                            {!! Form::text('email') !!}
                            {!! Form::closeGroup() !!}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('picture', trans('validation.attributes.picture')) !!}
                            {!! Form::file('picture') !!}
                            {!! Form::closeGroup() !!}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('password', trans('validation.attributes.password')) !!}
                            {!! Form::password('password') !!}
                            {!! Form::closeGroup() !!}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('password_confirmation', trans('auth::messages.register.confirm_password')) !!}
                            {!! Form::password('password_confirmation') !!}
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
    	</div>
    </div>
@stop