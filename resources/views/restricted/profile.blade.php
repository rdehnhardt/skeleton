@extends('layouts.restricted')

@section('title', trans('validation.attributes.profile'))

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="content">
                    <form role="form" method="POST" action="{{ route('restricted.profile') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ Auth::user()->name }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="exampleInputEmail1">Endereço de e-mail</label>
                                    <input type="email" class="form-control" name="email" placeholder="Endereço de e-mail" value="{{ Auth::user()->email }}">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                    <label>Foto</label>
                                    <input type="file" name="picture" class="form-control">
                                    @if ($errors->has('picture'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('picture') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <h4 class="title">Alterar Senha</h4>
                        <hr style="margin: 0 0 10px 0" />

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>Senha</label>
                                    <input type="password" name="password" class="form-control">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label>Confirmar Senha</label>
                                    <input type="password" name="password_confirmation" class="form-control">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Alterar Dados</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="/img/full-screen-image-{{ $backgroundImage }}.jpg" />
                </div>
                <div class="content">
                    <div class="author">
                        <a href="#">
                            <img class="avatar border-gray" src="/storage/profile/{{ Auth::user()->picture }}" alt="{{ Auth::user()->name }}"/>

                            <h4 class="title">{{ Auth::user()->name }}<br/>
                                <small>{{ Auth::user()->email }}</small>
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection