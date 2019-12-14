@extends('layouts.front')

@section('header')
<div id="account">
    <section class="home-slider ftco-degree-bg">
      <div class="slider-item bread-wrap" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>My Account</span></p>
              <h1 class="mb-3 bread">{!!$pageTitle ?? ''!!}</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-3 pb-3">
            <div class="list-group">
                <a href="{{route('account.home')}}" class="list-group-item list-group-item-action active">Dashboard</a>
                <a href="{{route('account.donations.index')}}" class="list-group-item list-group-item-action">My Donations</a>
                <a href="{{route('account.donations.create')}}" class="list-group-item list-group-item-action">Add Donations</a>
                <a href="{{route('account.transactions.index')}}" class="list-group-item list-group-item-action disabled">Transactions</a>
            </div>
        </div>
        <div class="col-md-9">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @yield('account-content')
        </div>
    </div>
</div>

@endsection
