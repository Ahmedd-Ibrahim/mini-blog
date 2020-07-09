@extends('frontend.inclouds.master')
@section('content')
@section('title','blog')

<div class="nav-fix"></div>
  <!-- ======= begin Blog ======= -->
  <div class="blog">
<div class="container">
<h1>{{__('portf.Blog')}}</h1>

<div class="text-center">
    {!! $posts->render() !!}
</div>

    <div class="row">
        @foreach ($posts as $post)


        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        @if(!empty($post->image))
                        <img class="d-block w-100 content-post" src="{{asset('/images/' . $post->image)}}" alt="First slide">
                       @endif
                       @if (empty($post->image))
                       <img class="d-block w-100 content-post" src="{{asset('imgs/services/1593723338.jpg')}}" alt="First slide">
                       @endif

                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">{{$post->title}}</h3>
                        <p class="text-center">{{ substr(strip_tags($post->body), 0, 50) }}{{ strlen(strip_tags($post->body)) > 50 ? "..." : "" }}</p>
                        <a class="read-more text-center"  type="button" href="{{ route('front.blog.single', $post->slug) }}">View full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        @endforeach

{{--
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>
                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div>
        <div class="col-md-3">
            <div class="blog-box-left">
                <div class="content-post"  >
                    <div class="image-box">
                        <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="">
                    </div>
                    <div class="blog-box-block ">
                        <h3 class="text-center">Title of the post</h3>
                        <p class="text-center">Any Contetent Here</p>
                        <a class="read-more text-center" type="button" href="{{url('blog/post')}}">  view Full Post <i class="fas fa-eye"></i></a>
                    </div>
                    </div>

                </div>
        </div> --}}

    </div>

    {!! $posts->render() !!}
    <hr>
</div>
</div>


@endsection
