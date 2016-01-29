@if (session('flash-message') && session('flash-alert'))
    <div class="alert alert-{!! Session::get('flash-alert') !!}">
        <p>{{ session('flash-message') }}</p>
    </div>
@endif