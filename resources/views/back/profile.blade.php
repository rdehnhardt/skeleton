@extends('back.layout')

@section('title', trans('back.profile'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="content">
                    {!! Form::open(['method' => 'post', 'route' => ['back.profile'], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::openGroup('name', trans('dictionary.name')) !!}
                                {!! Form::text('name', auth()->user()->name) !!}
                                {!! Form::closeGroup() !!}
                            </div>

                            <div class="col-md-6">
                                {!! Form::openGroup('email', trans('dictionary.email')) !!}
                                {!! Form::email('email', auth()->user()->email) !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::openGroup('picture', trans('dictionary.picture')) !!}
                                {!! Form::file('picture') !!}
                                {!! Form::closeGroup() !!}
                            </div>
                        </div>

                        <h4 class="title" style="margin: 18px 0 0 0">@lang('auth.change-password')</h4>
                        <hr style="margin: 0 0 18px 0" />

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

                        <button class="btn btn-info btn-fill pull-right">@lang('dictionary.update')</button>
                        <div class="clearfix"></div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="/img/full-screen-image-{{ $background }}.jpg" />
                </div>
                <div class="content">
                    <div class="author">
                        <a href="{{ route('back.profile') }}">
                            <img class="avatar border-gray" src="{{Auth::user()->picture != NULL ? '/storage/profile/' : '/images/default-profile.png'}}{{ Auth::user()->picture }}" alt="{{ Auth::user()->name }}"/>

                            <h4 class="title">{{ auth()->user()->name }}<br/>
                                <small>{{ auth()->user()->email }}</small>
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
