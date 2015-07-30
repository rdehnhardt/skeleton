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
                        <div class="row">
                        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        		<input type="text" name="start-date" id="start-date" value="{{ date('Y-m-d') }}">
                                <input type="text" name="end-date" id="end-date" value="{{ date('Y-m-d') }}">
                                <input type="button" name="btt-reload" id="btt-reload" value="Ok" />
                        	</div>
                        </div>

                        <div id="visits" data-height="400"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop