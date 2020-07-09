@extends('backend.inclouds.master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->


    <div class="row">

      <div class="col-lg-12">
      <a class="d-inline-block" href="{{url('admin/portfolio')}}"> <i class="fas fa-arrow-left"></i> Back To portfolio </a>
        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <div>
                    <h4 class="text-center m-0 font-weight-bold text-primary">Add New portfolio<h4>
            </div>

          </div>
          <div class="card-body">
              @if(Session::has('added'))
          <p class="btn btn-success">{{Session::get('added')}}</p>
              @endif
              <form method="POST" action="{{ url('admin/portfolio/save')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">English Title </label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" placeholder="English Title" name="name_en">
                  </div>
                  @error('name_en')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Arabic Title</label>
                    <input type="text" class="form-control @error('name_ar') is-invalid @enderror" id="name" placeholder="Arabic Title" name="name_ar">
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
                    <input type="text" class="form-control @error('discription_ar') is-invalid @enderror" id="inputPassword4" placeholder="Arabic discription" name="discription_ar">
                  </div>
                  @error('discription_ar')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">Link Social</label>
                    <input type="text" class="form-control  @error('link') is-invalid @enderror" id="inputPassword4" placeholder="link" name="link">
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
                  @error('category')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputPassword4">photo</label>
                    <input type="file" class="form-control" id="inputPassword4" placeholder="discription" name="photo">
                  </div>
                  @error('photo')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">Save!</button>
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
