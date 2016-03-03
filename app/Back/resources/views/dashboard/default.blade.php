@extends('back::layout.app')

@section('page-title')
    <h1>{{ trans('back::dashboard.title') }}</h1>
@stop

@section('page-breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('back::dictionary.visits') }}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                </button>

                <button type="button" class="btn btn-box-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <div class="chart">
                <canvas id="areaChart" style="height:350px"></canvas>
            </div>
        </div>
    </div>
@stop