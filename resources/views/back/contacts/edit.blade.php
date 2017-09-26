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
                    <h4 class="title">@lang('dictionary.update'): {{ $contact->name }}</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'put', 'route' => ['back.contacts.update', $contact->id], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::openGroup('name', trans('dictionary.name')) !!}
                                {!! Form::text('name', $contact->name) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <hr />

                        <button class="btn btn-info btn-fill pull-right">@lang('dictionary.update')</button>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection