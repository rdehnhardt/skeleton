@extends('back::app')

@section('title', trans('base.dashboard'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Tab 1</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Tab 2</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Tab 3</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Dropdown Tab <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                    <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">Content for tab 1</div>
                            <div class="tab-pane fade" id="tab2default">Content for tab 2</div>
                            <div class="tab-pane fade" id="tab3default">Content for tab 3</div>
                            <div class="tab-pane fade" id="tab4default">Content for tab 4</div>
                            <div class="tab-pane fade" id="tab5default">Content for tab 5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop