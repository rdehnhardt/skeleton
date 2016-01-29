@extends('back::app')

@section('page-title')
	<h1>Dashboard</h1>
@stop

@section('content')
	<div class="card">
		<div class="card-block">
			<h4 class="card-title">Visits</h4>

			<canvas id="visits" width="100%" height="400"></canvas>
		</div>
	</div>
@stop