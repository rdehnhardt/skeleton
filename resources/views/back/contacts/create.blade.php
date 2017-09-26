@extends('back.layout')

@section('title', trans('dictionary.contacts'))

@push('page-actions')
    <a href="{{ route('back.contacts.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('back.contacts.create')</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.contacts.store']]) !!}
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::openGroup('name', trans('dictionary.name')) !!}
                                {!! Form::text('name') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <hr />

                        <button class="btn btn-info btn-fill pull-right">@lang('dictionary.create')</button>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection