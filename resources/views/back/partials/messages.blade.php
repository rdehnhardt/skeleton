@include('flash::message')

@if (Session::has('message') && Session::get('message-class'))
    <div class="alert alert-{!! Session::get('message-class') !!}">
        <p>{{ Session::get('message') }}</p>
    </div>
@endif