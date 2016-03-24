@extends('back::layout.app')

@section('page-name', 'documents images')

@section('page-title')
    <h1>{{ _ucwords(trans('back::documents.images.create')) }}</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.documents.images.index') }}" class="btn btn-flat btn-default">
        <i class="fa fa-arrow-left"></i> {{ _ucwords(trans('back::dictionary.back')) }}
    </a>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box box-primary">
                {!! Form::open(['method' => 'post', 'files' => true, 'route' => ['back.documents.images.store']]) !!}
                    <div class="box-header with-border">
                        <h3 class="box-title">{{ _ucwords(trans('back::documents.images.create')) }}</h3>
                    </div>

                    <div class="box-body">
                        <div class="row">
                        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                {!! Form::openGroup('title', _ucwords(trans('back::dictionary.title'))) !!}
                                {!! Form::text('title') !!}
                                {!! Form::closeGroup() !!}
                        	</div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                {!! Form::openGroup('tags', _ucwords(trans('back::dictionary.tags'))) !!}
                                {!! Form::text('tags', null, ['data-role' => 'tagsinput']) !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                {!! Form::openGroup('image', _ucwords(trans('back::dictionary.image'))) !!}
                                {!! Form::file('image') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        {!! Form::openGroup('description', _ucwords(trans('back::dictionary.description'))) !!}
                        {!! Form::textarea('description', null, ['rows' => 3]) !!}
                        {!! Form::closeGroup() !!}
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-flat btn-primary">
                            <i class="fa fa-floppy-o"></i> {{ trans('back::dictionary.save') }}
                        </button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop