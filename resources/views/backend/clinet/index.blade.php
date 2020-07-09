@extends('backend.inclouds.master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">clinet</h1>

    <div class="row">


      <div class="col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Your clinet Info </h6>
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

            @foreach ($clinets as $clinet)
            <div class="my-2"></div>
            <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <div class="mybutton ">
                                <a href="{{url('admin/clinet/edit/'.$clinet->id)}}" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                            </div>
                          <button class="btn btn-link" data-toggle="collapse" data-target="#email" aria-expanded="true" aria-controls="collapseOne">
                            {{$clinet->name_en}} :
                          </button>
                        </h5>
                      </div>
                      <div id="email" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          {{$clinet->number}}
                        </div>
                      </div>
                    </div>
                  </div>
        </div>
            </div>
            <div class="my-2"></div>

 <!-- Delete clinet Modal-->
 <div class="modal fade" id="category{{$clinet->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Delete" below if you are ready to Delete Your clinet.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{url('admin/clinet/delete/'.$clinet->id)}}" >Delete! </a>
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
