@extends('layouts.front')

@section('header')
    <section class="home-slider ftco-degree-bg">
      <div class="slider-item bread-wrap" style="background-image: url({{asset('images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4 text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>{{$pageTitle ?? ''}}</span></p>
              <h1 class="mb-3 bread">{!!$pageSubtitle ?? ''!!}</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
