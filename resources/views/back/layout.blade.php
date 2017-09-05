@extends('back.theme')

@section('body')
    <div class="wrapper">
        @include('back.layout.sidebar')

        <div class="main-panel">
            @include('back.layout.header')

            <div class="content">
                <div class="container-fluid">
                    @include('flash::message')

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