<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#563d7c">

    <title>
      @yield('page_title')
    </title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/blog.css') }}">

    <script src="{{ asset('/js/Chart.min.js')}}"></script>
    <script src="{{ asset('/js/utils.js')}}"></script>
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="d-flex flex-column h-100">

    

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light border-bottom">
      <div class="container">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <img src="{{asset('/img/logo2.jpeg')}}" style="width: 40px" class="navbar-brand my-0">
          <b class="d-none d-lg-block">Kelurahan Gayungan</b>
          <!-- <a class="navbar-brand d-lg-none" href="{{url('/')}}">RW 03 Gayungan</a> -->

          <div class="collapse navbar-collapse justify-content-md-end" id="navbarsExample08">
            <ul class="navbar-nav">
              @yield('nav')
            </ul>
          </div>

      </div>
    </nav>    

    

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-1 pt-1">
          </div>
          <div class="col-10 text-center">
            <a class="blog-header-logo text-dark">
              @yield('child_title')
            </a>
          </div>
          <div class="col-1 d-flex justify-content-end align-items-center">
          </div>
        </div>
      </header>
      @yield('nav-scroll')
    </div>

    <main role="main" class="container">
      @yield('content')
    </main><!-- /.container -->

    <footer class="blog-footer mt-auto">
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
  </body>
</html>
