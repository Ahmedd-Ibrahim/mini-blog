@extends('backend.inclouds.master')
@section('content')

          <!-- Begin Page Content -->
 <div class="container-fluid mange_posts">

    <div class="row">

      <div class="col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Your Posts</h6>
          </div>
          <div class="card-body">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h5 class="mb-0">

                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#static" aria-expanded="false" aria-controls="collapseTwo">
                          Static Post Your Title Will be here #1
                        </button>
                      </h5>
                    </div>
                    <div id="static" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>

                        @foreach ($postss as $posts)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="mycategory">
                                        <button href="#" class="btn btn-link" data-toggle="collapse" data-target="#post{{$posts->id}}" aria-expanded="true" aria-controls="collapseOne">
                                            <span class="icon text-white-50">
                                              <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">{{$posts->title}}</span>
                                          </button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="mybutton">
                                        <a data-toggle="modal"  data-target='#category{{$posts->id}}'  href="#" class="btn btn-danger " type="button">Delete <i class="fas fa-trash-alt"></i></a>
                                        <a href="{{url('admin/posts/edit/'.$posts->id)}}" class="btn btn-info">Edit <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>
                            </div>
                                </h5>
                        </div>
                <div id="post{{$posts->id}}" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                     {{$posts->content}}
                    <div class="my-2"></div>
                    </div>
                  </div>
                </div>




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


<!-- End of Main Content -->

@endsection
