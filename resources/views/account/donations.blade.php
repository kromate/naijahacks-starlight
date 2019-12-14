@extends('layouts.account')

@section('account-content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Name</th>
                            <th>description</th>
                            <th>location</th>
                            <th>type</th>
                            <th>status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($donations as $donation)
                                <tr>
                                    <td scope="row">
                                        <div>{{ $donation->name }}</div>
                                        <div>
                                            <div class="btn-group" role="group" aria-label="">
                                                <a href="{{action('HomeController@singleDonation', $donation->id)}}" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                <a href="{{route('account.donations.edit', $donation->id)}}" class="btn btn-outline-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="{{route('account.donations.destroy', $donation->id)}}" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ str_limit($donation->description, 50) }}</td>
                                    <td>{{ $donation->location['state'] }}</td>
                                    <td>{{ $donation->type }}</td>
                                    <td>{{ $donation->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
