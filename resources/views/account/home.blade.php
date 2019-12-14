@extends('layouts.account')

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-3 pb-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action">Item</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Disabled item</a>
            </div>
        </div>
        <div class="col-md-9">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col text-center">
                    <div class="card-columns">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">50</h4>
                                <p class="card-text">Donations</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">30</h4>
                                <p class="card-text">Recieved materials</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">750</h4>
                                <p class="card-text">points earned</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
