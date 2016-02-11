@extends('back::app')

@section('page-name', 'dashboard')

@section('page-title')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="panel panel-brand">
        <div class="panel-heading">
            <h3 class="panel-title">Visits</h3>
        </div>

        <div class="panel-body">
            <input type="hidden" name="start-date" id="start-date" value="{{ date('Y-m-d') }}">
            <input type="hidden" name="end-date" id="end-date" value="{{ date('Y-m-d') }}">
            <input type="hidden" name="btt-reload" id="btt-reload" value="Ok"/>
            <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 250px;">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                <span></span> <b class="caret"></b>
            </div>

            <div id="visits" data-height="500"></div>
        </div>
    </div>
@stop