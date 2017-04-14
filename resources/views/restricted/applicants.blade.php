@extends('layouts.restricted')

@section('title', trans('validation.attributes.applicants'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <applicants></applicants>
        </div>
    </div>
@endsection