@extends('layouts.restricted')

@section('title', trans('validation.attributes.companies'))

@section('content')
    <div class="row">
        <div class="col-md-12">
            <companies></companies>
        </div>
    </div>
@endsection