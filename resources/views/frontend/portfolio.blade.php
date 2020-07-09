@extends('frontend.inclouds.master')
@section('content')
@section('title','PORTFOLIO')
<div class="nav-fix"></div>
   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">


      <div class="section-title">
      <h2>{{__('portf.Portfolio')}}</h2>
      <p>{{__('portf.CHECK OUR PORTFOLIO')}}</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


@foreach ($portfolio as $item)
        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$item->category}}">
        <img src="{{asset($item->photo)}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{$item->name}}</h4>
            <p>{{$item->discription}}</p>
          <a href="{{asset($item->photo)}}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Portfolio Section -->
@endsection
