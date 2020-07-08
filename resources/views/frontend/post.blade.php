@extends('frontend.inclouds.master')
@section('content')
@section('title','contact')


<div class="nav-fix"></div>

 <!-- Page Content -->
 <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>



        <hr>

        <!-- Date/Time -->
        <p class="post-time">{{ date('F dS, Y - g:iA' ,strtotime($post->created_at)) }}</p>

        <hr>

        <!-- Preview Image -->
        @if(!empty($post->image))
				<img src="{{asset('/images/' . $post->image)}}" width="700" height="400" />
            @endif
            @if (empty($post->image))
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
            @endif


        <hr>

        <!-- Post Content -->
        <p>{!! $post->body !!}</p>

        {{-- End post Content --}}
        <hr>


{{-- Start Comment Section --}}
<div class="row">
    <div class="col-md-8 ">
        <h3 class="comments-title"><i class="fas fa-comment-alt"></i>  {{ $post->comments()->count() . " " }} Comments</h3>
        @foreach($post->comments as $comment)
            <div class="comment">
                <div class="author-info">

                    <img src="{{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }}" class="author-image">
                    <div class="author-name">
                        <h4>{{ $comment->name }}</h4>
                        <p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
                    </div>

                </div>

                <div class="comment-content">
                    {{ $comment->comment }}
                </div>

            </div>
        @endforeach
    </div>
</div>

<div class="row">
    <div id="comment-form"  style="margin-top: 50px;">
        {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('name', "Name:") }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-6">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-12">
                    {{ Form::label('comment', "Comment:") }}
                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                    {{ Form::submit('Add Comment', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top:15px;']) }}
                </div>
            </div>

        {{ Form::close() }}
    </div>
</div>
<hr>
{{-- End comment section --}}
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        {{-- <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> --}}

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header custom-header">Categories</h5>
          <div class="card-body custom-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                    <li>
                        Posted In: <span class="category-name">{{ $post->category->name }} </span>
                    </li>

                </ul>
              </div>

            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header custom-header">Last Post</h5>
          <div class="card-body custom-body">
            <div class="sup-content">
                <h4>{{ substr(strip_tags($last->title), 0, 20) }}{{ strlen(strip_tags($last->title)) > 20 ? "..." : "" }}</h4>
            <p>{{ substr(strip_tags($last->body), 0, 100) }}{{ strlen(strip_tags($last->body)) > 100 ? "..." : "" }}</p>
                <a class="text-center d-block" type="button" href="{{ route('front.blog.single', $last->slug) }}">read more <i class="fas fa-eye"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


@endsection
