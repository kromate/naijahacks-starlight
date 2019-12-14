@extends('layouts.default')

@section('content')
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <p class="meta d-flex mb-3">
                <span>Donated by <a href="#">{{$donation->donor->name}} </a> </span>
            </p>
            <div><img src="{{asset('uploads/donations/images/'.$donation->image)}}" alt="{{$donation->name}}"> </div>
            <h3>{{$donation->name}}</h3>
            <p>Quantity: {{$donation->quantity}}</p>
            <p>Type: {{$donation->type}}</p>
            <p>location: {{$donation->location['state']}}</p>
            {!!$donation->description!!}

            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                @foreach ($donation->categories as $category)
                    <a href="#" class="tag-cloud-link">{{$category->name}}</a>
                @endforeach
              </div>
            </div>

            <div class="about-author d-flex p-5 bg-light">
              <div class="bio align-self-md-center mr-5">
                <img src="{{asset("images/person_1.jpg")}}" alt="{{$donation->donor->name}}" width="120px" class="img-fluid rounded-circle mb-4">
              </div>
              <div class="desc align-self-md-center">
                <h3>{{$donation->donor->name}}</h3>
                <p><a href="#" class="btn btn-primary">Discuss your meeting location</a><small class="text-warning">Unforunately this feature is not ready yet. please check back later</small></p>
              </div>
            </div>


          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                @foreach ($categories as $category)
                    <li><a href="#">{{$category->name}} <span>({{$category->donations_count}})</span></a></li>
                @endforeach
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
@endsection
