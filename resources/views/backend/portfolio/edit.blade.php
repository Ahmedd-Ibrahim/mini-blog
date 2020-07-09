@extends('backend.inclouds.master')
@section('content')



<div class="row">
    <div class="col-lg-12">
 <!-- Edit categories -->
 <div class="card shadow ">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit portfolio</h6>
    </div>
    <div class="card-body">
        @if(Session::has('edit'))
    <p class="btn btn-success">{{Session::get('edit')}}</p>
        @endif
        @if(Session::has('updated'))
    <p class="btn btn-success">{{Session::get('updated') .' to -> ' . $edit->name }} </p>
        @endif
      <form method="POST" action="{{ url('admin/portfolio/update',$edit -> id)}}" enctype="multipart/form-data">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">English Title</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="English title" name="name_en" value="{{$edit->name_en}}">
            </div>

            @error('name_en')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputEmail4">Arabic Title</label>
            <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="name_ar" placeholder="Arabic title" name="name_ar" value="{{$edit->name_ar}}">
            </div>

            @error('name_ar')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">English  Discription</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="english discription" name="discription_en" value="{{$edit->discription_en}}">
            </div>

            @error('discription_en')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">Arabic  Discription</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Arabic discription" name="discription_ar" value="{{$edit->discription_ar}}">
            </div>

            @error('discription_ar')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">link</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="discription" name="link" value="{{$edit->link}}">
            </div>

            @error('link')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
                <label for="inputPassword4">Category</label>

<div class="input-group mb-3">
<select name="category" class="custom-select" id="inputGroupSelect02">
  <option selected>Choose...</option>
  <option value="web">web</option>
  <option value="app">app</option>
  <option value="card">card</option>
</select>
<div class="input-group-append">
  <label class="input-group-text" for="inputGroupSelect02">Category</label>
</div>
</div>
              </div>
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
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Active ?
              </label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Save!</button>
        <a href="{{url('admin/portfolio')}}" class="btn btn-primary">back To portfolio</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
