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
                <a class="btn btn-xs btn-success" href="{{ route('wallet.create') }}">Create New Wallet</a>
            </div>
        </div>
    </div>

    <table class="table table-responsive-md">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th width="300px">Actions</th>
        </tr>

        @foreach ($wallets as $wallet)
            <tr>
                <td>{{ $wallet->id }}</td>
                <td>{{ $wallet->name }}</td>
                <td>
                    <a class="btn btn-xs btn-info" href="{{ route('wallet.show', $wallet->id) }}">Show</a>
                    <a class="btn btn-xs btn-primary" href="{{ route('wallet.edit', $wallet->id) }}">Edit</a>
                    <form method="Post" action={{route('wallet.destroy', $wallet->id)}} aria-label="{{ __('Delete') }}" style="display:inline">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Delete') }}
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
