@extends('back::app')

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
                        <input type="hidden" name="start-date" id="start-date" value="{{ date('Y-m-d') }}">
                        <input type="hidden" name="end-date" id="end-date" value="{{ date('Y-m-d') }}">
                        <input type="hidden" name="btt-reload" id="btt-reload" value="Ok"/>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 250px;">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                    <span></span> <b class="caret"></b>
                                </div>
                            </div>
                        </div>

                        <div id="visits" data-height="400"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
