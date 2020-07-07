@extends('backend.inclouds.master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">posts</h1>

    <div class="row">

      <div class="col-lg-12">

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
                    <label for="inputEmail4">English title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" name="title">
                  </div>
                  @error('title')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Post cover photo</label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" placeholder="photo" name="photo">
                  </div>
                  @error('photo')
                  <div class="clearFix"></div>
                  <div class="alert alert-danger" role="alert">
                    {{$message}}
                  </div>
                  @enderror
                  <div class="col-lg-12">
                      <!-- Create the editor container -->
            <div id="editor">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br></p>
            </div>
            </div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>
                    {{-- <div class="form-group">
                      <label>Your Post Content</label>
                      <textarea  name="content" class="form-control" rows="3"></textarea>
                    </div> --}}
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

          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
