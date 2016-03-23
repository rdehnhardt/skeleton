@extends('back::layout.app')

@section('page-name', 'documents images')

@section('page-title')
    <h1>{{ trans('back::documents.images.title') }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div id="grid" data-columns>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-1.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">montain</span>
                        <span class="badge">clouds</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-2.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">car</span>
                        <span class="badge">old car</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-3.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">red fruits</span>
                        <span class="badge">colors</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-43eec3.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">ocean</span>
                        <span class="badge">blue</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-5.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">florest</span>
                        <span class="badge">blue</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-6.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">bamboo</span>
                        <span class="badge">green</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-7.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">read</span>
                        <span class="badge">woman</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-8.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">boat</span>
                        <span class="badge">river</span>
                        <span class="badge">bridge</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-9.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">san francisco</span>
                        <span class="badge">river</span>
                        <span class="badge">bridge</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-10.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">new york</span>
                        <span class="badge">sky</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-11.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">island</span>
                        <span class="badge">ocean</span>
                    </p>
                    <div class="actions">
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-crop"></i> Crop</a>
                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-download"></i> Download</a>
                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
                <div class="image">
                    <img src="http://ultraimg.com/images/photo-12.jpg" class="img-responsive"/>
                    <p class="tags">
                        <span class="badge">clouds</span>
                        <span class="badge">montain</span>
                    </p>
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