@extends('frontend.inclouds.master')
@section('content')
  <!-- ======= Hero Section ======= -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
// scroll to bottom
  $(".custom-scroll-btn-up").click(function() { // buttom scroll up
    $('.blog-container').animate({
        scrollTop: $(".target0").offset().top = 0
// scrollTo('#up');
    }, 1000);

});
// End scroll bottom
// scroll to Top
$(".custom-scroll-btn-down").click(function() { // buttom scroll down
    $('.blog-container').animate({
        scrollTop: $(".blog-container").offset().top
// scrollTo('#up');
    }, 1000);

});
// End  scroll to Top
  });

</script>
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

 <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-end">
        <div class="col-lg-11">
          <div class="row justify-content-end">

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-simple-smile"></i>
                <span data-toggle="counter-up">{{$clinet->number}}</span>
              <p>{{$clinet->name}}</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-document-folder"></i>
                <span data-toggle="counter-up">{{$projects->number}}</span>
                <p>{{$projects->name}}</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-clock-time"></i>
                <span data-toggle="counter-up">{{$experience->number}}</span>
              <p>{{$experience->name}}</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="icofont-award"></i>
                <span data-toggle="counter-up">{{$awrd->number}}</span>
                <p>{{$awrd->name}}</p>
              </div>
            </div>

          </div>
        </div>
      </div>


    </div>
  </section>


  <!-- End About Section -->




  {{-- Begin mini blog --}}

  <div class="blog">
    <div class="container">
        <h2 class="recent-posts">
            {{__('index.Recently Posts')}}


        </h2>
        <div class="row">
            {{-- start left posts --}}
        <div class="col-md-6" >
                <div class="col-md-12">
                    <button class="btn btn-primary custom-scroll-btn-up">Scroll up</button>


                    <div class="blog-container">
                        <div id="up"></div>
                        @foreach ($posts as $keys => $post)
                    <div class="blog-box target{{$keys}}">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="sup-content">
                                <h4>{{ substr(strip_tags($post->title), 0, 20) }}{{ strlen(strip_tags($post->title)) > 20 ? "..." : "" }}</h4>
                            <p>{{ substr(strip_tags($post->body), 0, 100) }}{{ strlen(strip_tags($post->body)) > 100 ? "..." : "" }}</p>
                                <a type="button" href="{{ route('front.blog.single', $post->slug) }}">read more <i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="img-box">
                            @if(!empty($post->image))
			        	<img src="{{asset('/images/' . $post->image)}}" />
                               @endif
                               @if (empty($post->image))
                                 <img src="{{asset('imgs/services/1593723338.jpg')}}">
                               @endif

                        </div>
                        </div>
                        </div>
                </div>
                @endforeach
                <div id="down"></div>
            </div>
            <button  class="btn btn-primary custom-scroll-btn-down">Scroll Down</button>

            </div>
            </div>
            {{-- End left posts --}}
            {{-- begin right slide posts --}}
            <div class="col-md-6">

                <div class="blog-box-left index-box">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">

                            @foreach ($slidePosts as $key => $post)
                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">

                                @if(!empty($post->image))
                                <img class="d-block w-100 content-post" src="{{asset('/images/' . $post->image)}}" alt="First slide">
                               @endif
                               @if (empty($post->image))
                               <img class="d-block w-100 content-post" src="{{asset('imgs/services/1593723338.jpg')}}" alt="First slide">
                               @endif

                                <div class="carousel-caption d-none d-md-block blog-box-block">
                                    <h5>{{$post->title}}</h5>
                                    <p>{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</p>
                                <a class="read-more text-center"  type="button" href="{{ route('front.blog.single', $post->slug) }}">View full Post <i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>

                </div>
            </div>
            {{-- End right slide posts --}}
        </div>
    </div>
</div>

{{-- End mini blog --}}


  </main><!-- End #main -->
  <hr>

  @endsection
