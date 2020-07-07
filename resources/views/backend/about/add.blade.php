@extends('backend.inclouds.master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->


    <div class="row">

      <div class="col-lg-12">
      <a class="d-inline-block" href="{{url('admin/about')}}"> <i class="fas fa-arrow-left"></i> Back To about </a>
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">

            <div>
                    <h4 class="text-center m-0 font-weight-bold text-primary">Add New about<h4>
            </div>

          </div>
          <div class="card-body">
              @if(Session::has('added'))
          <p class="btn btn-success">{{Session::get('added')}}</p>
              @endif
            <form method="POST" action="{{ url('admin/about/save') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">English Title</label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" placeholder="English title" name="name_en">
                  </div>
                  @error('name_en')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Arabic Title</label>
                    <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="name_ar" placeholder="Arabic title" name="name_ar">
                  </div>
                  @error('name_ar')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">English Discription</label>
                    <input type="text" class="form-control @error('discription_en') is-invalid @enderror" id="inputPassword4" placeholder="English discription" name="discription_en">
                  </div>
                  @error('discription_en')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Arabic Discription</label>
                    <input type="text" class="form-control @error('discription_r') is-invalid @enderror" id="inputPassword4" placeholder="Arabic discription" name="discription_ar">
                  </div>
                  @error('discription_ar')
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
                </div>

                <button type="submit" class="btn btn-primary">Add!</button>
                <a class="btn btn-primary" href="{{url('admin/about')}}">
               Back To about!</a>
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
