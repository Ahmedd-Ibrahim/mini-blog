@extends('backend.inclouds.master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->


    <div class="row">

      <div class="col-lg-12">
      <a class="d-inline-block" href="{{url('admin/team')}}"> <i class="fas fa-arrow-left"></i> Back To team </a>
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">

            <div>
                    <h4 class="text-center m-0 font-weight-bold text-primary">Add New team<h4>
            </div>

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
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">socail</label>
                    <input type="file" class="form-control" id="inputPassword4" placeholder="upload photo" name="photo">
                  </div>

                @error('photo')
                <div class="clearFix"></div>
                <div class="alert alert-danger" role="alert">
                  {{$message}}
                </div>
                @enderror

                <button type="submit" class="btn btn-primary">Add!</button>
                <a class="btn btn-primary" href="{{url('admin/services')}}">
               Back To Services!</a>
              </form>

          </div>
        </div>

        <!-- Brand Buttons -->

      </div>


        </div>
      </div>
    </div>
  </div>


          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
