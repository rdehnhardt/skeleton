@extends('layouts.theme')

@section('body')
    <div class="wrapper">
        @include('layouts.dashboard.sidebar')

        <div class="main-panel">
            @include('layouts.dashboard.header')

            <div class="content">
                <div class="container-fluid">
                    @if (session()->has('flash_notification.message'))
                        <div class="alert alert-{{ session('flash_notification.level') }}">
                            {!! session('flash_notification.message') !!}
                        </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link href="{{ mix('css/dashboard.css') }}" rel="stylesheet"/>
@endpush

@push('scripts')
    <script src="{{ mix('js/dashboard.js') }}"></script>
@endpush