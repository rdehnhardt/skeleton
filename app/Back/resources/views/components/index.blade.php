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
                                Tables
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'buttons']) }}">
                                Buttons
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'buttons-group']) }}">
                                Buttons Group
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'buttons-dropdowns']) }}">
                                Buttons Dropdowns
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'forms']) }}">
                                Forms
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'input-group']) }}">
                                Input Group
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'pagination']) }}">
                                Pagination
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'modals']) }}">
                                Modals
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('back.components', ['component' => 'cards']) }}">
                                Cards
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