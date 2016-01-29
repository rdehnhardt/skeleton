@if (isset($errors))
    <div class="alert alert-danger">
        <p><strong>Whoops!</strong> There were some problems with your input.</p>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif