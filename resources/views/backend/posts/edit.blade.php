@extends('backend.inclouds.master')
@section('content')



<div class="row">
    <div class="col-lg-12">
 <!-- Edit categories -->
 <div class="card shadow ">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit postses</h6>
    </div>
    <div class="card-body">
        @if(Session::has('edit'))
    <p class="btn btn-success">{{Session::get('edit')}}</p>
        @endif
        @if(Session::has('updated'))
    <p class="btn btn-success">{{Session::get('updated') .' to -> ' . $edit['name'] }} </p>
        @endif
      <form method="POST" action="{{ url('admin/posts/update',$edit -> id) }}">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="name" placeholder="title" name="title" value="{{$edit->title}}">
            </div>

            @error('title')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            {{-- <div class="form-group col-md-12">
              <label for="inputPassword4">Content</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="inputPassword4" placeholder="Content" name="content" value="{{$edit->content}}">
            </div> --}}

            <div class="col-lg-12">
                <div class="form-group">
                  <label>Your New Post Content</label>
                  <textarea  name="content" class="form-control" rows="3"></textarea>
                </div>
              </div>
            @error('content')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror

          </div>


          <button type="submit" class="btn btn-primary">Save!</button>
        <a href="{{url('admin/posts')}}" class="btn btn-primary">back To posts</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
