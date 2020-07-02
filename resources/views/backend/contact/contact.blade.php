@extends('backend\inclouds\master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">contact</h1>

    <div class="row">

      <div class="col-lg-6">

        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New contact</h6>
          </div>
          <div class="card-body">
              @if(Session::has('added'))
          <p class="btn btn-success">{{Session::get('added')}}</p>
              @endif
            <form method="POST" action="{{ url('admin/contact/save') }}">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">address</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="name" placeholder="name" name="address">
                  </div>
                  @error('address')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">email</label>
                    <input type="email" class="form-control" id="inputPassword4" placeholder="email" name="email">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">phone</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="phone" name="phone">
                  </div>
                  @error('phone')
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
              </form>
          </div>
        </div>

        <!-- Brand Buttons -->

      </div>
      <div class="col-lg-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Your contact Info</h6>
          </div>
          <div class="card-body">
              @error('delete-error')
              <p class="btn btn-warning"> {{$message}}</p>
              @enderror
              @if(Session::has('success'))
              <p class="btn btn-success"> {{Session::get('success')}}</p>
              @endif
              @if(Session::has('updated'))
              <p class="btn btn-success"> {{Session::get('updated')}}</p>
              @endif

            @foreach ($contacts as $contact)
            <div class="my-2"></div>
            <div class="row">
            <div class="col-md-6 col-sm-12"><div class="mycategory ">
                <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-check"></i>
                    </span>
                    <span class="text">{{$contact->email}}</span>
                  </a>
            </div></div>
            <div class="col-md-6 col-sm-12">
            <div class="mybutton ">
                <a data-toggle="modal"  data-target='#category{{$contact->id}}'  href="#" class="btn btn-danger " type="button">Delete <i class="fas fa-trash-alt"></i></a>
                <a href="{{url('admin/contact/edit/'.$contact->id)}}" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
            </div>
            </div>


            </div>
            <div class="my-2"></div>

 <!-- Delete contact Modal-->
 <div class="modal fade" id="category{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Delete" below if you are ready to Delete Your contact.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <a class="btn btn-primary" href="{{url('admin/contact/delete/'.$contact->id)}}" >Delete! </a>

        </div>
      </div>
    </div>
  </div>

            @endforeach
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
