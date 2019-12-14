@extends('layouts.account')

@section('account-content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Item</th>
                            <th>Reciever</th>
                            <th>quantiy</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td scope="row">
                                        <div>{{ $transaction->name }}</div>
                                        {{-- <div>
                                            <div class="btn-group" role="group" aria-label="">
                                                <a href="{{action('HomeController@singleDonation', $transaction->id)}}" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="{{route('account.transactions.edit', $transaction->id)}}" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="{{route('account.transactions.destroy', $transaction->id)}}" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </div> --}}
                                    </td>
                                    <td>{{ $transaction->location['state'] }}</td>
                                    <td>{{ $transaction->type }}</td>
                                    <td>{{ $transaction->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
