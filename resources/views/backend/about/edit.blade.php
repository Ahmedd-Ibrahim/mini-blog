@extends('backend.inclouds.master')
@section('content')



<div class="row">
    <div class="col-lg-12">
 <!-- Edit categories -->
 <div class="card shadow ">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Categories</h6>
    </div>
    <div class="card-body">
        @if(Session::has('edit'))
    <p class="btn btn-success">{{Session::get('edit')}}</p>
        @endif
        @if(Session::has('updated'))
    <p class="btn btn-success">{{Session::get('updated') .' to -> ' . $edit['name'] }} </p>
        @endif
      <form method="POST" action="{{ url('admin/about/update',$edit -> id)}}" enctype="multipart/form-data">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">English Title</label>
            <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name" placeholder="English Title" name="name_en" value="{{$edit->name_en}}">
            </div>
            @error('name_en')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputEmail4">Arabic Title</label>
            <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="name" placeholder="arabic Title" name="name_ar" value="{{$edit->name_ar}}">
            </div>
            @error('name_ar')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">English Discription</label>
            <input type="text" class="form-control @error('discription_en') is-invalid @enderror" id="inputPassword4" placeholder="English discription" name="discription_en" value="{{$edit->discription_en}}">
            </div>
            @error('discription_en')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">Arabic Discription</label>
            <input type="text" class="form-control @error('discription_ar') is-invalid @enderror" id="inputPassword4" placeholder="Arabic discription" name="discription_ar" value="{{$edit->discription_ar}}">
            </div>
            @error('discription_ar')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror

            <div class="form-group col-md-12">
              <label for="inputPassword4">photo</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="inputPassword4" placeholder="photo" name="photo">
            </div>
            @error('photo')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>


          <button type="submit" class="btn btn-primary">Save!</button>
        <a href="{{url('admin/about')}}" class="btn btn-primary">back To about</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
