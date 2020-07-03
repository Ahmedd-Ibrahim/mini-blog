@extends('backend\inclouds\master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Portfolio</h1>

    <div class="row">
      <div class="col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <a href="{{url('admin/portfolio/add')}}"  class="m-0 font-weight-bold btn btn-primary">Add New portFolio</a>
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
              <div class="row">
                @foreach ($Portfolios as $Portfolio)

                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="header-box">
                                <div class="row">
                                    <div class="col-md-6">{{$Portfolio->name}}</div>
                                    <div class="col-md-6">

                                      <div class="mybutton">
                                        <a data-toggle="modal"  data-target='#category{{$Portfolio->id}}' href="#"><button class="btn btn-danger"> delete <i class="fas fa-trash-alt"></i></button></a>
                                        <a href="{{url('admin/portfolio/edit/'.$Portfolio->id)}}" ><button class="btn btn-info"> Edit <i class="fas fa-edit"></i></button></a>


                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    {{-- photo --}}
                                    <div class="imge-box">
                                    <img class="imge" src="{{asset($Portfolio->photo)}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    {{-- discripton --}}
                                    <div class="discription-box">
                                        {{$Portfolio->discription}}
                                    </div>
                                </div>
                                 </div>
                        </div>
                        </div>
                </div>



{{--
            @foreach ($Portfolios as $Portfolio)
            <div class="my-2"></div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="mycategory">
                        <a href="#" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                              <i class="fas fa-check"></i>
                            </span>
                            <span class="text">{{$Portfolio->name}}</span>
                          </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mybutton">
                        <a data-toggle="modal"  data-target='#category{{$Portfolio->id}}'  href="#" class="btn btn-danger " type="button">Delete <i class="fas fa-trash-alt"></i></a>
                        <a href="{{url('admin/portfolio/edit/'.$Portfolio->id)}}" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                    </div>
                </div>
            </div>


 --}}

            <div class="my-2"></div>

 <!-- Delete Portfolio Modal-->
 <div class="modal fade" id="category{{$Portfolio->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Delete" below if you are ready to Delete Your portfolio.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <a class="btn btn-primary" href="{{url('admin/portfolio/delete/'.$Portfolio->id)}}" >Delete! </a>

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
