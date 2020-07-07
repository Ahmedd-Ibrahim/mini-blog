@extends('frontend.inclouds.master')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">

    <h1>{{__('index.Plan. Launch. Grow.')}}</h1>
    <h2>{{__('index.MOSTASHARY FOR TRANLATION')}}</h2>
      <div class="d-flex">
      <a href="{{url('about')}}" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->



 <!-- ======= About Section ======= -->
 {{-- <section id="about" class="about">
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
  </section> --}}


  <!-- End About Section -->









  {{-- Begin mini blog --}}
<div class="blog">
    <div class="container">
        <h2>
            {{__('index.Recently Posts')}}
        </h2>
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12">
                    <div class="blog-container">
                    <div class="blog-box">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="sup-content">
                                <h4>title</h4>
                            <p>some discription</p>
                                <a type="button" href="{{url('blog/post')}}">read more <i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="img-box">
                            <img src="{{asset('imgs/services/1593723338.jpg')}}">
                        </div>
                        </div>
                        </div>
                </div>
                    <div class="blog-box">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="sup-content">
                                <h4>title</h4>
                            <p>some discription</p>
                                <a class="read-more" type="button" href="#">read more <i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="img-box">
                            <img src="{{asset('imgs/services/1593723338.jpg')}}">
                        </div>
                        </div>
                        </div>
                </div>
                    <div class="blog-box">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="sup-content">
                                <h4>title</h4>
                            <p>some discription</p>

                                <a class="read-more" type="button" href="{{url('blog/post')}}">read amore <i class="fas fa-eye"></i></a>

                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="img-box">
                            <img src="{{asset('imgs/services/1593723338.jpg')}}">
                        </div>
                        </div>
                        </div>
                </div>
                    <div class="blog-box">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="sup-content">
                                <h4>title</h4>
                            <p>some discription</p>

                                <a class="read-more" type="button" href="{{url('blog/post')}}">read more <i class="fas fa-eye"></i></a>

                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="img-box">
                            <img src="{{asset('imgs/services/1593723338.jpg')}}">
                        </div>
                        </div>
                        </div>
                </div>


            </div>

            </div>
            </div>
            <div class="col-md-6">

                <div class="blog-box-left">
                <div class="content-post" style="background-image: url('{{asset('imgs/services/1593723338.jpg')}}') ">
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- End mini blog --}}


  </main><!-- End #main -->
  @endsection
