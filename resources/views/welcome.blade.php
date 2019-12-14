@extends('layouts.front')

@section('header')
    <section class="home-slider ftco-degree-bg">
      <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 ftco-animate text-center">
              <h1 class="mb-4">A Place to <strong>Give</strong> <strong>Recieve</strong>
                {{-- <strong class="typewrite" data-period="4000" data-type='[ "Give.", "Recieve."]'>
                  <span class="wrap"></span>
                </strong> --}}
                & <strong>Get Rewards</strong>
              </h1>
              <p>The future Leaders of Tomorrow Start by Reading a Book Today</p>
              <p>
                  <a href="#" class="btn btn-secondary btn-outline-white px-4 py-3 popup-vimeo"> Give </a>
                  <a href="#" class="btn btn-secondary btn-outline-white px-4 py-3 popup-vimeo"> Find</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
@endsection


@section('content')

    {{-- <section class="ftco-section-featured ftco-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel owl-carousel">
              <div class="item">
                <a href="portfolio.html">
                  <img src="{{asset('images/dashboard_full_1.jpg')}}" class="img-fluid" alt="">
                </a>
              </div>
              <div class="item">
                <a href="portfolio.html">
                  <img src="{{asset('images/dashboard_full_2.jpg')}}" class="img-fluid" alt="">
                </a>
              </div>
              <div class="item">
                <a href="portfolio.html">
                  <img src="{{asset('images/dashboard_full_3.jpg')}}" class="img-fluid" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}


    <section class="ftco-section-featured ftco-animate ftco-degree-bg">
      <div class="container">
        {{-- <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Available Donations</span>
            <h2>Giveacad allows you to recieve and donate the following!</h2>
          </div>
        </div> --}}
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch bg-light pt-5 ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center icon-layers"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">TIME</h3>
                <p>by giving your time online to teach anyone cpurse of your choice to student who are in need of this, Or sarcifice time to answer students Academic questions</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch bg-light pt-5 ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center icon-gears"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">BOOKS</h3>
                <p>We know you have some old books you not using any more, it just sitting idle in your house. Awwn, well this is an oppurtunity to help the community and also get rid of those books.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch bg-light pt-5 ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center icon-paper-plane"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">MONEY</h3>
                <p>We also accept Monetary donation, if you would like to sponsor a child this is the place to do so. With 100% guarantee that your money will be used for that exact purpose.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch bg-light pt-5 ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center icon-live_help"></span></div></div>
              <div class="media-body p-2">
                <h3 class="heading">ANYTHING</h3>
                <p>Maybe you just in a happy Mode or you just have certain academic materials you not making use of again well we are here to take the materials off your hands and give it to the needy.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="available" class="ftco-section pt-5 ftco-degree-bg">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Available Donations</span>
            <h2>Giveacad allows you to recieve and donate the following!</h2>
          </div>
        </div>
        <div class="card-columns">
        @foreach ($donations as $item)
          {{-- <div class="col-md-4 ftco-animate"> --}}
            <div class="card blog-entry" data-aos-delay="100">
              @if ($item->image != '')
                <a href="#" class="block-20" style="background-image: url({{asset('donations/images/'.$item->image)}});">
                </a>
              @endif
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div><a href="#">{{$item->donor->name}}</a></div>
                  <div><a href="#" class="meta-chat"><strong>{{$item->quantity}} </strong> in stock</a></div>
                  <div><a class="badge badge-dark text-white" href="#">{{$item->type}}</a></div>
                  <div><a class="badge badge-dark text-white" href="#">{{$item->location}}</a></div>
                </div>
                <h3 class="heading"><a href="#">{{$item->name}}</a></h3>
                <p><a class="btn btn-primary" href="{{ action('HomeController@singleDonation', $item->id) }}">See more</a></p>
              </div>
            </div>
          {{-- </div> --}}
        @endforeach
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
               <a class="btn btn-primary btn-outline-primary btn-lg " href="#">See More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax ftco-degree-bg">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
              <h2 class="h1 font-weight-bold">Don't Throw away your old books, Give to someone who needs it</h2>
              <p><a href="#" class="btn btn-primary btn-outline-white mt-3 py-3 px-4">Donate today</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Values</span>
            <h2>Why we are doing this</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="block-3 d-md-flex ftco-animate">
            <a href="portfolio.html" class="image" style="background-image: url('images/work-1.jpg'); "></a>
            <div class="text">
              <h2 class="heading"><a href="portfolio.html">We believe in better tomorrow</a></h2>
              <p>We believe that by reading a book the Leader of Tomorrow could be better than we are today, and could then bring up to a better end</p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate">
            <a href="portfolio.html" class="image order-2" style="background-image: url('images/work-2.jpg'); "></a>
            <div class="text order-1">
              <h2 class="heading"><a href="portfolio.html">Reduced Hardship</a></h2>
              <p>The stress and hardship faced by student in acquiring others that othher already have and not using could be eliminated by our service</p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate">
            <a href="portfolio.html" class="image" style="background-image: url('images/work-3.jpg'); "></a>
            <div class="text">
              <h2 class="heading"><a href="portfolio.html">Connectivity and Unity</a></h2>
              <p>The Platform is not just a service is also a community of educators and learner, where long-lasting friends can be made and maintained</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section testimony-section ftco-degree-bg">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Customer Says</span>
            <h2>Our satisfied customer says</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter ftco-degree-bg" id="section-counter">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2>Our achievements</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="2783">0</strong>
                <span>Total donations</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1602">0</strong>
                <span>Donations recieved</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="876">0</strong>
                <span>Total members of Giveacad</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
