@extends('frontend.inclouds.master')
@section('content')
<div class="nav-fix"></div>
@section('title','ABOUT US')



   <!-- ======= About Boxes Section ======= -->
   <section id="about-boxes" class="about-boxes">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
          <img src="{{asset('frontend/assets/img/about-boxes-1.jpg')}}" class="card-img-top" alt="...">
            <div class="card-icon">
              <i class="ri-brush-4-line"></i>
            </div>
            <div class="card-body">
                
            <h5 class="card-title"><a href="">{{__('about.Our Mission')}}</a></h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
          <img src="{{asset('frontend/assets/img/about-boxes-2.jpg')}}" class="card-img-top" alt="...">
            <div class="card-icon">
              <i class="ri-calendar-check-line"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">Our Plan</a></h5>

              <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
          <img src="{{asset('frontend/assets/img/about-boxes-3.jpg')}}" class="card-img-top" alt="...">
            <div class="card-icon">
              <i class="ri-movie-2-line"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="">Our Vision</a></h5>
              <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Boxes Section -->

@endsection
