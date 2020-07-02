@extends('backend\inclouds\master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">team</h1>

    <div class="row">

      <div class="col-lg-6">

        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New person to Your team</h6>
          </div>
          <div class="card-body">
              @if(Session::has('added'))
          <p class="btn btn-success">{{Session::get('added')}}</p>
              @endif
            <form method="POST" action="{{ url('admin/team/save') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name" name="name">
                  </div>
                  @error('name')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">title</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="title" name="title">
                  </div>
                  @error('title')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">photo</label>
                    <input type="file" class="form-control" id="inputPassword4" placeholder="photo" name="photo">
                  </div>

                @error('photo')
                <div class="clearFix"></div>
                <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div>
                @enderror
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">socail</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="socail media" name="social">
                  </div>
                </div>
                @error('socail')
                <div class="clearFix"></div>
                <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div>
                @enderror
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
            <h6 class="m-0 font-weight-bold text-primary">Your team</h6>
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

            @foreach ($teams as $team)
            <div class="my-2"></div>
            <div class="row">
                <div class="col-md-6 col-sm-12"><div class="mycategory">
                    <a href="#" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                          <i class="fas fa-check"></i>
                        </span>
                        <span class="text">{{$team->name}}</span>
                      </a>
                </div></div>
                <div class="col-md-6 col-sm-12">
                    <div class="mybutton">
                        <a data-toggle="modal"  data-target='#category{{$team->id}}'  href="#" class="btn btn-danger " type="button">Delete <i class="fas fa-trash-alt"></i></a>
                        <a href="{{url('admin/team/edit/'.$team->id)}}" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                    </div>
                </div>
            </div>




            <div class="my-2"></div>

 <!-- Delete team Modal-->
 <div class="modal fade" id="category{{$team->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Delete" below if you are ready to Delete Your this from your Team.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <a class="btn btn-primary" href="{{url('admin/team/delete/'.$team->id)}}" >Delete! </a>

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
