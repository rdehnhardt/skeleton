@extends('back::layout.app')

@section('page-name', 'documents images')

@section('page-title')
    <h1>{{ trans('back::documents.images.title') }}</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.documents.images.create') }}" class="btn btn-brand"><i class="fa fa-plus"></i> {{ trans('back::dictionary.new') }}</a>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="grid" data-columns>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-1.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-2.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-3.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-43eec3.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-5.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-6.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-7.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-8.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-9.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-10.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-11.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-12.jpg" class="img-responsive"/>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop