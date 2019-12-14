@extends('layouts.account')

@section('account-content')

<div class="row">
    <div class="col text-center">
        <div class="card pb-3">
            <div class="card-body">
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-size: cover;background-position: center center;background-image: url({{Auth::user()->image ? asset('uploads/users/'. Auth::user()->image) : asset('uploads/users/user.svg')}});"></a>
                    <div class="text">
                        <h3 class="heading">{{Auth::user()->name}}</h3>
                        <div class="">
                            <div><span class="icon-message"></span>{{Auth::user()->email}}</a></div>
                            <div><span class="icon-phone"></span>{{Auth::user()->phone}} </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

@endsection
