@extends('back::system.module')

@section('page-name', 'actions')

@section('page-title', 'Actions')

@section('page-actions')
    <a href="{{ route('back.system.actions.create') }}" class="btn btn-brand"><i class="fa fa-plus"></i> New</a>
@stop

@section('content')
    <div class="card">
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th width="33%">Name</th>
                    <th width="33%">Type</th>
                    <th width="1%">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records as $record)
                    <tr>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->type }}</td>
                        <td class="table-actions">
                            {!! Form::open(['method' => 'get', 'route' => ['back.system.actions.edit', $record->id]]) !!}
                            {!! Form::button('<i class="fa fa-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-primary-outline btn-xs']) !!}
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['back.system.actions.destroy', $record->id]]) !!}
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger-outline btn-xs']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No records found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@stop