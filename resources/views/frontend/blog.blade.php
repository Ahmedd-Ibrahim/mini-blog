@extends('frontend.inclouds.master')
@section('content')
@section('title','blog')

<div class="nav-fix"></div>
  <!-- ======= begin Blog ======= -->
  <div class="blog">
<div class="container">
    <h1 >Blog</h1>

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


@endsection
