@extends('back::app')

@section('page-name', 'system users')

@section('page-title')
    <h1>Users</h1>
@stop

@section('page-actions')
    <a href="{{ route('back.system.users.create') }}" class="btn btn-brand"><i class="fa fa-plus"></i> New</a>
@stop

@section('content')
    <div class="card">
        <table class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th width="33%">Name</th>
                    <th width="33%">Email</th>
                    <th width="33%">Created At</th>
                    <th width="1%">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records as $record)
                    <tr>
                        <td>{{ $record->name }}</td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->created_at->format('d/m/Y') }}</td>
                        <td class="table-actions">
                            {!! Form::open(['method' => 'get', 'route' => ['back.system.users.edit', $record->id]]) !!}
                            {!! Form::button('<i class="fa fa-pencil"></i>', ['type' => 'submit', 'class' => 'btn btn-primary-outline btn-xs']) !!}
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'delete', 'data-confirm' => 'You will not be able to recover this record!', 'route' => ['back.system.users.destroy', $record->id]]) !!}
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