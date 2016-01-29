@extends('back::app')

@section('page-name', 'dashboard')

@section('page-title')
	<h1>Dashboard</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-block">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h4 class="card-title">Visits</h4>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<input type="hidden" name="start-date" id="start-date" value="{{ date('Y-m-d') }}">
					<input type="hidden" name="end-date" id="end-date" value="{{ date('Y-m-d') }}">
					<input type="hidden" name="btt-reload" id="btt-reload" value="Ok"/>
					<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 250px;">
						<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
						<span></span> <b class="caret"></b>
					</div>
				</div>
			</div>

			<div id="visits" data-height="400"></div>
		</div>
	</div>
@stop