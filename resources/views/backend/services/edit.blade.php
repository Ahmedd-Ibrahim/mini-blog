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
      <form method="POST" action="{{ url('admin/services/update',$edit -> id)}}" enctype="multipart/form-data">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">title</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name_en" value="{{$edit->name_en}}">
            </div>

            @error('name')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputEmail4">title In arabic</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name_ar" value="{{$edit->name_ar}}">
            </div>

            @error('name_ar')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror

            <div class="form-group col-md-12">
              <label for="inputPassword4">Discription</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="discription in english" name="discription_en" value="{{$edit->discription_en}}">
            </div>

            @error('discription_en')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">Discription In arabic</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="discription in arabic" name="discription_ar" value="{{$edit->discription_ar}}">
            </div>

            @error('discription_ar')
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
        <a href="{{url('admin/services')}}" class="btn btn-primary">back To services</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
