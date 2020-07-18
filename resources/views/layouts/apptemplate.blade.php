<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>{{config('app.name', 'Brand')}}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="{{ asset('../resources/img/favicon.jpg') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <!-- scripts -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!-- icons -->
    <script src="https://kit.fontawesome.com/a5545a28d1.js" crossorigin="anonymous"></script>
    <!--Let browser know website is optimized for mobile-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

  <style>

  .navbar .navbar-collapse {
      text-align: center;
  }
  </style>

<body>

  <main style="margin-top: 5em;">
<!-- Top Naivagtion Bar -->
@include('inc.top_navbar')

  <!-- Page Content -->
  <div class="container" style="padding: 5em 1em 1em 1em;">
    {{-- <br> --}}
    {{-- <div class="row" style="margin-top:1em; margin-bottom: 1em;"> --}}
    @yield('content')
    {{-- </div> --}}

    <!-- Jumbotron Header -->
    {{-- <header class="jumbotron my-4">
      <h1 class="display-3">A Warm Welcome!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header> --}}

    <!-- Page Features -->
    {{-- <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

    </div> --}}
    <!-- /.row -->

  </div>
  <!-- /.container -->
  </main>
  </body>

  <div style="background-image: url(../resources/img/zoo-footer.png); 
  background-repeat: repeat-x; padding: 5em; background-size: 7em;">

  </div>
  <!-- Footer -->
<footer class="py-5" style="background-color: #014e2e">
    <div class="container text-center" style="padding-bottom: 30px;">
        <div class="row">
            <div class="col-sm" style="padding-top: 1em;">
              <a href="{{ url('/') }}">
                <img src="{{ asset('../resources/img/zoo-logo2.jpeg') }}" style="height:10em;"
                  alt="zoo-logo" class="d-flex justify-content-center mx-auto"></a>
                {{-- <img href="{{ url('/') }}" src="{{ asset('../resources/img/zoo-logo.jpg') }}" style="height:10em;"
                  alt="zoo-logo" class="d-flex justify-content-center mx-auto"> --}}

            </div>
            <div class="col-sm" style="padding-top: 1em;">
                <h4 class="text-white">Claybrook Zoo</h4>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="text-white" href="{{ url('/blog') }}">Blog</a></li>
                    <li class="nav-item"><a class="text-white" href="{{ url('/shop') }}">Shop</a></li>
                    <li class="nav-item"><a class="text-white" href="{{ url('/map') }}">Map</a></li>
                    <li class="nav-item"><a class="text-white" href="{{ url('/sponsor') }}">Sponsors</a></li>
                </ul>
            </div>
            <div class="col-sm" style="padding-top: 1em;">
                <h4 class="text-white">Connect</h4>
                <div class="justify-content-center" style="font-size: 3em;">
                    <a href="#"><i class="fab fa-instagram" style="color: #C13584"></i></a>
                    <a href="#"><i class="fab fa-facebook" style="color: #1877f2"></i></a>
                    <a href="#"><i class="fab fa-youtube" style="color: #FF0000"></i></a>
                    <a href="#"><i class="fab fa-twitter" style="color: #00acee"></i></a>
                </div>
            </div>
            <div class="col-sm" style="padding-top: 1em;">
                <h4 class="text-white">Information</h4>
                <ul class="navbar-nav">
                    <li><a class="text-white" href="{{ url('/privacy') }}">Privacy Policy</a></li>
                    <li><a class="text-white" href="{{ url('/terms') }}">Terms and Conditions</a></li>
                    <li><a class="text-white" href="{{ url('/faq') }}">FAQ</a></li>
                    <li><a class="text-white" href="{{ url('/contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    @include('inc.bottom_navbar')
</footer>

  <!-- Bootstrap core JavaScript -->
  {{-- <script src="vendor/jquery/jquery.min.js"></script> --}}
  {{-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}



</html>