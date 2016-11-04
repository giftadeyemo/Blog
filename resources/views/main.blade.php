 <!-- This is our main page for the blogging site. @extends is used
to incorporate it into the other pages. It contains the heading in the _head partial file, it contains the _nav bar in the _nav partial file, same as message, footer and script.
 --> 
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('partials._head')
  </head>
  <body>
      @include('partials._nav')

      @include('partials._messages')

      <div class="container">

        @yield('content')

        @include('partials._footer')
     </div> <!-- end of container-->

      @include('partials._script')
  </body>
</html>