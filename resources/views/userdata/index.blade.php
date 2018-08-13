@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3>Simple laravel CRUD with resource controller</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-success" href="{{ route('userdata.create') }}">Create New User</a>
            </div>
        </div>
    </div>

    <table class="table table-responsive-md">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age</th>
            <th width="300px">Actions</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->age }}</td>
                <td>
                    <a class="btn btn-xs btn-info" href="{{ route('userdata.show', $user->id) }}">Show</a>
                    <a class="btn btn-xs btn-primary" href="{{ route('userdata.edit', $user->id) }}">Edit</a>
                    <form method="Post" action={{route('userdata.destroy', $user->id)}} aria-label="{{ __('Delete') }}" style="display:inline">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Delete') }}
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
