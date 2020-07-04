@extends('frontend.inclouds.master')
@section('content')
@section('title','contact')


<div class="nav-fix"></div>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

  <div class=" section-title">
      <h2>Blog</h2>
      <p>Blog postes</p>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Last Postes</h6>
          </div>
          <div class="card-body">
            <div class="my-2"></div>

{{--
<div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Post #1
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Post #2
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Post #3
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
      </div>
    </div>
  </div>
End postes --}}





{{-- test posts --}}

<div class="container">
    <div id="blog" class="row">


                <div class="col-md-12 blogShort">
                    <h1>Title 1</h1>
                <img src="{{asset('imgs/services/1593723338.jpg')}}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">

                        <em>This snippet use <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank">Sexy Sidebar Navigation</a></em>
                    <article><p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                        </p></article>
                    <a class="btn btn-blog pull-right marginBottom10" href="{{url('blog/post')}}">READ MORE</a>
                </div>
                 <div class="col-md-10 blogShort">
                    <h1>Title 2</h1>
                    <img src="{{asset('imgs/services/1593723349.jpg')}}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                    <em>This snippet use <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank">Sexy Sidebar Navigation</a></em>
                    <article><p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                        </p></article>
                        <a class="btn btn-blog pull-right marginBottom10" href="{{url('blog/post')}}">READ MORE</a>
                </div>

                 <div class="col-md-10 blogShort">
                    <h1>Title 3</h1>
                    <img src="{{asset('imgs/services/1593723327.jpg')}}" alt="post img" class="pull-left img-responsive thumb margin10 img-thumbnail">
                    <em>This snippet use <a href="http://bootsnipp.com/snippets/featured/sexy-sidebar-navigation" target="_blank">Sexy Sidebar Navigation</a></em>
                    <article><p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only
                        five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                        of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                        </p></article>
                        <a class="btn btn-blog pull-right marginBottom10" href="{{url('blog/post')}}">READ MORE</a>
                </div>

              <div class="col-md-12 gap10"></div>
            </div>
</div>
</div>

{{-- test posts --}}








            </div>

    </div>
  </section><!-- End Contact Section -->

@endsection
