@extends('back.app')

@section('title', trans('base.dashboard'))

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Visitas</h3>
                    </div>
                    <div class="panel-body">
                        <div data-ajax-content="true" data-href="/back/visits/{{ date('Y-m-01') }}/{{ date('Y-m-d') }}" data-loading="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop