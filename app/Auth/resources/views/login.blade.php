@extends('auth::layout')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-block">
                    <h4 class="card-title">Login</h4>

                    {!! Form::open(['method' => 'post', 'route' => ['login']]) !!}

                    {!! Form::openGroup('email', 'Email') !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}

                    {!! Form::openGroup('password', 'Password') !!}
                    {!! Form::password('password') !!}
                    {!! Form::closeGroup() !!}

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> Login
                        </button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

            <a class="btn btn-link" href="{{ route('register') }}">Need an account?</a>
        </div>
    </div>
@endsection
