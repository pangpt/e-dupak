<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />

    @include('includes.styles')

    @yield('style-before')

    <!-- Title -->
    <title>Dashkit</title>

  </head>
  <body>
    <!-- NAVIGATION
    ================================================== -->


    @include('includes.sidebar')






    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">



      @yield('content')

    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    @include('includes.scripts')

    @yield('js-after')


  </body>
</html>
