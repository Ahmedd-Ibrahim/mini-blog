@extends('backend.inclouds.master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">posts</h1>

    <div class="row">

      <div class="col-lg-6">

        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New posts</h6>
          </div>
          <div class="card-body">
              @if(Session::has('added'))
          <p class="btn btn-success">{{Session::get('added')}}</p>
              @endif
            <form method="POST" action="{{ url('admin/posts/save') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" name="title">
                  </div>
                  @error('title')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  {{-- <div class="form-group col-md-12">
                    <label for="inputPassword4">Content</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="content" name="content">
                  </div> --}}


                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>Your Post Content</label>
                      <textarea  name="content" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">

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
            <h6 class="m-0 font-weight-bold text-primary">Your posts Title</h6>
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

            @foreach ($postss as $posts)
            <div class="my-2"></div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="mycategory">
                        <a href="#" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-check"></i>
                            </span>
                            <span class="text">{{$posts->title}}</span>
                          </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mybutton">
                        <a data-toggle="modal"  data-target='#category{{$posts->id}}'  href="#" class="btn btn-danger " type="button">Delete <i class="fas fa-trash-alt"></i></a>
                        <a href="{{url('admin/posts/edit/'.$posts->id)}}" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                    </div>
                </div>
            </div>

            <div class="my-2"></div>

 <!-- Delete posts Modal-->
 <div class="modal fade" id="category{{$posts->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Delete" below if you are ready to Delete Your Category.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <a class="btn btn-primary" href="{{url('admin/posts/delete/'.$posts->id)}}" >Delete! </a>

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
