@extends('back.app')

@section('title', 'Foo » Bar')

@section('page-actions')
    <a href="{{ route('back.foo.bar.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create</a>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">List of bar</h3>
                            </div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <form method="get" class="form-search">
                                            <div class="input-group">
                                                <input type="text" name="filter" value="{{ old('filter') }}"
                                                       class="form-control input-sm" placeholder="Search"/>

                                                <div class="input-group-btn">
                                                    <button class="btn btn-default btn-sm">Go</button>
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
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th width="1%">&nbsp;</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records as $record)
                                            <tr>
                                                <td>{{ $record->id }}</td>
                                                <td>{{ $record->title }}</td>
                                                <td>
                                                    @if ($record->status)
                                                        <span class="label label-success">Active</span>
                                                    @else
                                                        <span class="label label-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td class="table-actions">
                                                    {!! Form::open(['method' => 'get', 'route' => ['back.foo.bar.edit', $record->id]]) !!}
                                                    {!! Form::button('editar', ['type' => 'submit', 'class' => 'btn btn-default btn-xs']) !!}
                                                    {!! Form::close() !!}

                                                    {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['back.foo.bar.destroy', $record->id]]) !!}
                                                    {!! Form::button('remover', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs']) !!}
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