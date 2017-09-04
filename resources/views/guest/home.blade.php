@extends('layouts.guest')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ config('app.name') }}
            </div>

            <div class="links">
                <a href="/login">Login</a>
            </div>
        </div>
    </div>
@endsection
