@extends('back::app')

@section('title', trans('base.system') . ' » ' . trans('base.users'))

@section('page-actions')
    <a href="{{ route('back.system.users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> {{ trans('actions.create') }}</a>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ trans('dictionary.list') }}</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <form method="get" class="form-search">
                                            <div class="input-group">
                                                <input type="text" name="filter" value="{{ old('filter') }}" class="form-control input-sm" placeholder="{{ trans('actions.search') }}"/>

                                                <div class="input-group-btn">
                                                    <button class="btn btn-default btn-sm">{{ trans('dictionary.ok') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            @if ($records->count())
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th width="5%">#</th>
                                            <th>{{ trans('dictionary.name') }}</th>
                                            <th>{{ trans('dictionary.email') }}</th>
                                            <th width="1%">&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records as $record)
                                            <tr>
                                                <td>{{ $record->id }}</td>
                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->email }}</td>
                                                <td class="table-actions">
                                                    {!! Form::open(['method' => 'get', 'route' => ['back.system.users.edit', $record->id]]) !!}
                                                    {!! Form::button(trans('actions.edit'), ['type' => 'submit', 'class' => 'btn btn-default btn-xs']) !!}
                                                    {!! Form::close() !!}

                                                    {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['back.system.users.destroy', $record->id]]) !!}
                                                    {!! Form::button(trans('actions.remove'), ['type' => 'submit', 'class' => 'btn btn-danger btn-xs']) !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p>No records found.</p>
                            @endif
                        </div>

                        <nav class="text-right">
                            {!! $records->render() !!}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop