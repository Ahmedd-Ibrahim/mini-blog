@extends('backend.inclouds.master')
@section('content')



<div class="row">
    <div class="col-lg-12">
 <!-- Edit categories -->
 <div class="card shadow ">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Team</h6>
    </div>
    <div class="card-body">
        @if(Session::has('edit'))
    <p class="btn btn-success">{{Session::get('edit')}}</p>
        @endif
        @if(Session::has('updated'))
    <p class="btn btn-success">{{Session::get('updated') .' to -> ' . $edit['name'] }} </p>
        @endif
      <form method="POST" action="{{ url('admin/team/update',$edit -> id)}}" enctype="multipart/form-data">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name" value="{{$edit['name']}}">
            </div>

            @error('name')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">title</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="title" name="title" value="{{$edit->title}}">
            </div>

            @error('title')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">social</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="social" name="social" value="{{$edit->social}}">
            </div>

            @error('social')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror

            <div class="form-group col-md-12">
              <label for="inputPassword4">this is photo</label>
            <input type="file" class="form-control" id="inputPassword4" placeholder="photo" name="photo">
            </div>
            @error('photo')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>


          <button type="submit" class="btn btn-primary">Save!</button>
        <a href="{{url('admin/team')}}" class="btn btn-primary">back To team</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
