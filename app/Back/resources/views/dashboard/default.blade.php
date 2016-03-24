@extends('back::layout.app')

@section('page-title')
    <h1>{{ _ucwords(trans('back::dashboard.title')) }}</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('back.dashboard') }}"><i class="fa fa-dashboard"></i> {{ _ucwords(trans('back::dashboard.title')) }}</a></li>
    </ol>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('back::dashboard.visits.title') }}</h3>

            <div class="box-tools pull-right">
                <div class="input-group">
                    <button type="button" class="btn btn-sm btn-flat btn-default pull-right" id="reportrange">
                        <i class="fa fa-calendar"></i> {{ trans('back::dashboard.visits.date-range') }}
                        <i class="fa fa-caret-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                <div id="visits" data-height="400" style="color: #375879"></div>
            </div>
        </div>
    </div>
@stop