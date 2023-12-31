@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($permissions->name) ? $permissions->name : 'Permissions' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('permissions.permissions.destroy', $permissions->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('permissions.permissions.index') }}" class="btn btn-primary" title="Show All Permissions">
                        <span class="fa fa-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('permissions.permissions.create') }}" class="btn btn-success" title="Create New Permissions">
                        <span class="fa fa-plus" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('permissions.permissions.edit', $permissions->id ) }}" class="btn btn-primary" title="Edit Permissions">
                        <span class="fa fa-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Permissions" onclick="return confirm(&quot;Click Ok to delete Permissions.?&quot;)">
                        <span class="fa fa-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Created At</dt>
            <dd>{{ $permissions->created_at }}</dd>
            <dt>Guard Name</dt>
            <dd>{{ $permissions->guard_name }}</dd>
            <dt>Name</dt>
            <dd>{{ $permissions->name }}</dd>
            <dt>Updated At</dt>
            <dd>{{ $permissions->updated_at }}</dd>

        </dl>

    </div>
</div>

@endsection
