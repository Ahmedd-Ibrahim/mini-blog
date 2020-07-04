@extends('frontend.inclouds.master')
@section('content')
<div class="nav-fix"></div>
@section('title','ABOUT US')
 <!-- ======= About Section ======= -->
 <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-end">
        <div class="col-lg-11">
          <div class="row justify-content-end">

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-simple-smile"></i>
                <span data-toggle="counter-up">65</span>
                <p>Happy Clients</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-document-folder"></i>
                <span data-toggle="counter-up">85</span>
                <p>Projects</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-clock-time"></i>
                <span data-toggle="counter-up">12</span>
                <p>Years of experience</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-award"></i>
                <span data-toggle="counter-up">15</span>
                <p>Awards</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
        <img src="{{asset('frontend/assets/img/about.jpg')}}" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 pt-3 pt-lg-0 content">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bx bx-check-double"></i> Voluptate repellendus pariatur reprehenderit corporis sint.</li>
            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>

      </div>

    </div>
  </section><!-- End About Section -->

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
