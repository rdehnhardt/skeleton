@extends('back::app')

@section('page-title')
    <h1>Components</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'tables']) }}">
                                <i class="fa fa-table"></i> Tables
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'buttons']) }}">
                                <i class="fa fa-floppy-o"></i> Buttons
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'forms']) }}">
                                <i class="fa fa-table"></i> Forms
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'modals']) }}">
                                <i class="fa fa-table"></i> Modals
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'cards']) }}">
                                <i class="fa fa-table"></i> Cards
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                @include($include)
            </div>
        </div>
    </div>
@stop