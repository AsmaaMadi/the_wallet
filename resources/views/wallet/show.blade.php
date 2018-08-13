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
                <a class="btn btn-xs btn-success" href="{{ route('userdata.create') }}">Create New user</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="pull-right">
                <a class="btn btn-xs btn-success" href="{{ route('transaction.create') }}">Create New transaction</a>
            </div>
        </div>
    </div>

    <table class="table table-responsive-md">
        <tr>
            <th>Name</th>
            <th>User of Wallet</th>
            <th>Amount of Wallet</th>
        </tr>


        <tr>
            <td>{{ $wallet->name }}</td>
            <td>
                <ul class="d-inline-block">
                  {{--  @php($user =)--}}
                  @if($wallet->userdata().length > 0)
                          @foreach ($wallet->userdata() as $user)
                           { <li>{{ $user }}</li>}
                        @endforeach
                      @endif

                </ul>
            </td>
            <td>
                {{$wallet->transaction->amount}}
            </td>
        </tr>
        @endforeach
    </table>

@endsection
