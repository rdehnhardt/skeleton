@extends('back.app')

@section('title', trans('base.dashboard'))

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel Title</h3>
                    </div>
                    <div class="panel-body">
                        Panel body
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel Title</h3>
                    </div>
                    <div class="panel-body">
                        Panel body
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panel Title</h3>
                    </div>
                    <div class="panel-body">
                        Panel body
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop