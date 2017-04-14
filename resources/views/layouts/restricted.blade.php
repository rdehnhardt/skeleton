@extends('empty')

@push('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
@endpush

@section('body')
    <div class="wrapper">
        @include('restricted.partials.sidebar')

        <div class="main-panel">
            @include('restricted.partials.header')

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