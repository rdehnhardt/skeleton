@if (Session::has('message'))
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="alert alert-{!! Session::get('message-class') !!}">
                    <p>{{ Session::get('message') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif