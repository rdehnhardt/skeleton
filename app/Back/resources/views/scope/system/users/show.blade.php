@extends('back::app')

@section('page-title', trans('base.system') . ' » ' . trans('base.users') . ' » ' . trans('actions.show'))

@section('page-actions')
    <a href="{{ URL::previous() }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
@stop

@section('content')

@stop