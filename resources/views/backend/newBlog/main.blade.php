<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.newBlog.partials._head')
  </head>

  <body>

    @include('backend.newBlog.partials._nav')

    <div class="container">
      @include('backend.newBlog.partials._messages')

      @yield('content')

      @include('backend.newBlog.partials._footer')

    </div> <!-- end of .container -->

        @include('backend.newBlog.partials._javascript')

        @yield('scripts')

  </body>
</html>
