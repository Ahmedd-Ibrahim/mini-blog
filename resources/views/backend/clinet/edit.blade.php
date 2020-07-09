@extends('backend.inclouds.master')
@section('content')



<div class="row">
    <div class="col-lg-12">
 <!-- clinet categories -->
 <div class="card shadow ">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">clinet Categories</h6>
    </div>
    <div class="card-body">
        @if(Session::has('clinet'))
    <p class="btn btn-success">{{Session::get('clinet')}}</p>
        @endif
        @if(Session::has('updated'))
    <p class="btn btn-success">{{Session::get('updated') .' to -> ' . $clinet['name'] }} </p>
        @endif
      <form method="POST" action="{{ url('admin/clinet/update',$clinet -> id) }}">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputPassword4">English Name: </label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="name In English" name="name_en" value="{{$clinet->name_en}}">
            </div>
            @error('name_en')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputPassword4">Arabic name: </label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Name In arabic" name="name_ar" value="{{$clinet->name_ar}}">
            </div>
            @error('name_ar')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputPassword4">Number: </label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="phone" name="number" value="{{$clinet->number}}">
            </div>
            @error('number')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Save!</button>
        <a href="{{url('admin/ckinet')}}" class="btn btn-primary">back To Cinet</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
