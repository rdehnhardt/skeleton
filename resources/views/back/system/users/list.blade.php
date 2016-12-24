@extends('back.layout')

@section('title', trans('back.system.users.title'))

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="/back"><i class="fa fa-dashboard"></i> {{ trans('back.home.title') }}</a></li>
        <li><a href="/back/system">{{ trans('back.system.title') }}</a></li>
        <li class="active">{{ trans('back.system.users.title') }}</li>
    </ol>
@endsection

@section('content')
    <div class="text-right">
        <a href="/back/system/users/create" class="btn btn-primary btn-flat margin-bottom">{{ trans('back.system.users.create') }}</a>
    </div>

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('back.system.users.table') }}</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="1%" nowrap>#</th>
                        <th>Name</th>
                        <th width="1%" nowrap>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($records as $record)
                        <tr>
                            <td>{{ $record->id }}</td>
                            <td>{{ $record->name }}</td>
                            <td nowrap>
                                <a href="/back/system/users/{{ $record->id }}/edit"><i class="fa fa-folder"></i> {{ trans('back.common.open') }}</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">{{ trans('back.common.records-not-found') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            {{ $records->links() }}
        </div>
    </div>
@endsection
