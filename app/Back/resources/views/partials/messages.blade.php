@if (Session::has('flash-message') && Session::get('flash-alert'))
    <div class="alert alert-{!! Session::get('flash-alert') !!}">
        <p>{{ Session::get('flash-message') }}</p>
    </div>
@endif