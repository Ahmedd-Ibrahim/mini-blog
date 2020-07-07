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
      <form method="POST" action="{{ url('admin/contact/update',$edit -> id) }}">
          @csrf

          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputEmail4">English address</label>
            <input type="text" class="form-control @error('address_en') is-invalid @enderror" id="name" placeholder="English Adress" name="address_en" value="{{$edit->address_en}}">
            </div>

            @error('address_en')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputEmail4">Arabic address</label>
            <input type="text" class="form-control @error('address_ar') is-invalid @enderror" id="name" placeholder="Arabic Adress" name="address_ar" value="{{$edit->address_ar}}">
            </div>
            @error('address_ar')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">email</label>
            <input type="email" class="form-control" id="inputPassword4" placeholder="email" name="email" value="{{$edit->email}}">
            </div>

            @error('email')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
            <div class="form-group col-md-12">
              <label for="inputPassword4">phone</label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="phone" name="phone" value="{{$edit->phone}}">
            </div>
            @error('phone')
            <div class="clearFix"></div>
            <div class="alert alert-danger" role="alert">
              {{$message}}
            </div>
            @enderror
          </div>


          <button type="submit" class="btn btn-primary">Save!</button>
        <a href="{{url('admin/contact')}}" class="btn btn-primary">back To contact</a>
        </form>
    </div>
  </div>
    </div>
</div>
  @endsection
