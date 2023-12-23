@extends('layouts.master')
@section('content')

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-warning" href="{{ route('admin.users.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.user.title') }}
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.user.fields.id') }}
                    </th>
                    <td>
                        {{ $user->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.user.fields.title') }}
                    </th>
                    <td>
                        {{ $user->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.user.fields.email') }}
                    </th>
                    <td>
                        {{ $user->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.user.fields.email_verified_at') }}
                    </th>
                    <td>
                        {{ $user->email_verified_at }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.user.fields.roles') }}
                    </th>
                    <td>
                        @foreach($user->roles as $key => $roles)
                            <span class="label label-info">{{ $roles->title }}</span>
                        @endforeach
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
