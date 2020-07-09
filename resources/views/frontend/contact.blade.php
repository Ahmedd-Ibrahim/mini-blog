@extends('frontend.inclouds.master')
@section('content')
@section('title','contact')
<div class="nav-fix"></div>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
  <div class=" section-title">
      <h2>{{__('contact.contact')}}</h2>
  <p>{{__('contact.Contact Us')}}</p>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>{{__('contact.Our Address')}}</h3>
              <p> {{$adress->adress}}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
            <h3>{{__('contact.Email Us')}}</h3>
              <p>info@example.com<br>{{$email->email}}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
            <h3>{{__('contact.Call Us')}}</h3>
            <p>{{$phone->phone}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-4 mt-lg-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d54675.923619883135!2d31.44656374761964!3d31.07510504781265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1593897820382!5m2!1sen!2seg" width="600" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

    </div>

    </div>
  </section><!-- End Contact Section -->

@endsection
