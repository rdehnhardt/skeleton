@extends('back::layout.app')

@section('page-name', 'system users')

@section('page-title')
    <h1>{{ trans('back::system.user.title') }}</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.system.users.create') }}" class="btn btn-default">
        <i class="fa fa-plus"></i> {{ trans('back::dictionary.new') }}
    </a>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            {!! Form::open(['method' => 'get', 'route' => ['back.system.users.index']]) !!}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('back::dictionary.filter') }}</h3>
                </div>
                <div class="box-body">
                    {!! Form::openGroup('name', _ucwords(trans('validation.attributes.name'))) !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}

                    <div class="hidden-sm hidden-xs">
                        {!! Form::openGroup('email', _ucwords(trans('validation.attributes.email'))) !!}
                        {!! Form::text('email') !!}
                        {!! Form::closeGroup() !!}
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-flat btn-default pull-left">
                        <i class="fa fa-search"></i>
                        {{ trans('back::dictionary.search') }}
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans('back::system.user.list') }}</h3>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-condensed">
                            <thead>
                            <tr>
                                <th width="25%">{{ ucfirst(trans('validation.attributes.name')) }}</th>
                                <th width="25%">{{ ucfirst(trans('validation.attributes.role')) }}</th>
                                <th width="25%">{{ ucfirst(trans('validation.attributes.email')) }}</th>
                                <th width="24%">{{ ucfirst(trans('validation.attributes.created_at')) }}</th>
                                <th width="1%">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($records as $record)
                                <tr>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->role }}</td>
                                    <td>{{ $record->email }}</td>
                                    <td>{{ $record->created_at->format('d/m/Y H:i') }}</td>
                                    <td class="table-actions">
                                        {!! Form::open(['method' => 'get', 'route' => ['back.system.users.edit', $record->id]]) !!}
                                        {!! Form::button('<i class="fa fa-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-flat btn-default btn-xs']) !!}
                                        {!! Form::close() !!}

                                        {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['back.system.users.destroy', $record->id]]) !!}
                                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-flat btn-danger btn-xs']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">{{  trans('back::dictionary.no-records') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="box-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            {{ sprintf(trans('back::paginator.showing'), $records->currentPage(), $records->perPage(), $records->total()) }}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            {{ $records->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop