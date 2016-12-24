@extends('back.layout')

@section('title', trans('back.system.title'))

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><i class="fa fa-dashboard"></i> {{ trans('back.home.title') }}</li>
        <li class="active">{{ trans('back.system.title') }}</li>
    </ol>
@endsection

@section('content')

@endsection
