@extends('back.layout')

@section('title', trans('dictionary.users'))

@push('page-actions')
    <a href="{{ route('back.users.index') }}" class="btn btn-default">@lang('dictionary.back')</a>
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">@lang('back.users.create')</h4>
                </div>

                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.users.store']]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::openGroup('name', trans('dictionary.name')) !!}
                                {!! Form::text('name') !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-md-6">
                                {!! Form::openGroup('email', trans('dictionary.email')) !!}
                                {!! Form::text('email') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::openGroup('password', trans('dictionary.password')) !!}
                                {!! Form::password('password') !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-md-6">
                                {!! Form::openGroup('password_confirmation', trans('auth.password-confirmation')) !!}
                                {!! Form::password('password_confirmation') !!}
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