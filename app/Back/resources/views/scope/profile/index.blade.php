@extends('back::app')

@section('page-title', trans('base.profile'))

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('dictionary.profile') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::model($record, ['route' => ['back.profile.update', $record->id], 'method' => 'put']) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('name', trans('dictionary.name')) !!}
                            {!! Form::text('name') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('email', trans('dictionary.email')) !!}
                            {!! Form::email('email') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('password', trans('dictionary.password')) !!}
                            {!! Form::password('password') !!}
                            {!! Form::closeGroup() !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            {!! Form::openGroup('password_confirmation', trans('dictionary.password-confirm')) !!}
                            {!! Form::password('password_confirmation') !!}
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

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Gravatar</h3>
                </div>
                <div class="panel-body text-center">
                    <img src="{{ Auth::user()->gravatar(250) }}" width="100%" class="img-responsive">
                    <br/><br/>

                    <a target="_blank" href="http://en.gravatar.com/emails" class="btn btn-block btn-default" title="gravatar.com">
                        {{ trans('dictionary.change-your-gravatar') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop