@extends('auth::layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Reset Password</h4>

                    {!! Form::open(['method' => 'post', 'route' => ['password.email']]) !!}

                    {!! Form::openGroup('email', 'E-Mail Address') !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                        </button>

                        <a class="btn btn-link" href="{{ route('login') }}">Login</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
