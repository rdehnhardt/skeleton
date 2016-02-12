@extends('back::app')

@section('page-name', 'system users')

@section('page-title')
    <h1>{{ trans('back::system.user.title') }}</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.system.users.create') }}" class="btn btn-brand"><i class="fa fa-plus"></i> {{ trans('back::dictionary.new') }}</a>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="panel panel-brand">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('back::dictionary.filter') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'get', 'route' => ['back.system.users.index']]) !!}
                    {!! Form::openGroup('name', trans('validation.attributes.name')) !!}
                    {!! Form::text('name') !!}
                    {!! Form::closeGroup() !!}

                    {!! Form::openGroup('email', trans('validation.attributes.email')) !!}
                    {!! Form::text('email') !!}
                    {!! Form::closeGroup() !!}

                    <div class="form-actions">
                        <button type="submit" class="btn btn-brand">
                            <i class="fa fa-search"></i>
                            {{ trans('back::dictionary.search') }}
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <div class="panel panel-brand">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('back::system.user.list') }}</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <th width="33%">{{ trans('validation.attributes.name') }}</th>
                            <th width="33%">{{ trans('validation.attributes.email') }}</th>
                            <th width="33%">{{ trans('validation.attributes.created_at') }}</th>
                            <th width="1%">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($records as $record)
                            <tr>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->email }}</td>
                                <td>{{ $record->created_at->format('d/m/Y H:i') }}</td>
                                <td class="table-actions">
                                    {!! Form::open(['method' => 'get', 'route' => ['back.system.users.edit', $record->id]]) !!}
                                    {!! Form::button('<i class="fa fa-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-brand btn-xs', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => trans('back::dictionary.edit')]) !!}
                                    {!! Form::close() !!}

                                    {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['back.system.users.destroy', $record->id]]) !!}
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => trans('back::dictionary.delete')]) !!}
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
        </div>
    </div>
@stop