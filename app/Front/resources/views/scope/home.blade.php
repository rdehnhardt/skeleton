@extends('front::app')

@section('content')
    <div class="title">{{ config('app.name') }}</div>
    <a href="/auth/login">{{ trans('dictionary.restricted-area') }}</a>
@stop