<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('user/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{asset('user/css/clean-blog.min.css')}}" rel="stylesheet">


  </head>

  <body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="\">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="\">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            <li>
            <li class="nav-item">
              <a class="nav-link" href="contact">Contact</a>
            </li>
                         <li class="nav-item">
              @if (Auth::guest())
                  <a class="nav-link" href="{{ route('login')}}">Login</a>
              @else
                  <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              @endif
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('user/img/Uaz-Logo-Symbol-Vector-Free-Download.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          
        </div>
      </div>
    </div>
    <hr>
    <div class="container section">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('user/img/1.jpg')}}" alt=""/>
                </div>
                <div class="col-md-6">
                    <h3>
                        UAZ Patriot
                    </h3>
                    <h4>
                        Price: 430 000 ₽
                    </h4>
                    <p>
                      <ul>
                       <li>Gearbox: mechanical Mileage: 85000 km</li>
                       <li>Engine power: 128 hp</li>
                       <li>Number of doors: 5</li>
                       <li>Owners by TCP: 3</li>
                       <li>Condition: not beaten</li>
                      </ul>
                    </p>
                </div>
                    <div class="collapse-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="trigger collapsed">
                                      Read more
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                      bla-bla-bla...
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('user/img/2_1.jpg')}}" alt=""/>
                </div>
                <div class="col-md-6">
                    <h3>
                        UAZ "Loaf" Van 3741
                    </h3>
                    <h4>
                        Price: 390 000 ₽
                    </h4>
                    <p>
                       <ul>
                         <li>Gearbox: mechanical Mileage: 5000 km</li>
                         <li>Engine power: 74 hp</li>
                         <li>Number of doors: 5</li>
                         <li>Owners by TCP: 3</li>
                         <li>Condition: not beaten</li>
                      </ul>
                    </p>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" class="trigger collapsed">
                               Read more
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            bla-bla-bla...
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('user/img/avtomobili-uaz-2360-855654.jpg')}}" alt=""/>
                </div>
                <div class="col-md-6">
                    <h3>
                        UAZ Pickup
                    </h3>
                    <h4>
                        Price: 420 000 ₽
                    </h4>
                    <p>
                       <ul>
                         <li>Gearbox: mechanical Mileage: 83346 km</li>
                         <li>Engine power: 135 hp</li>
                         <li>Number of doors: 4</li>
                         <li>Owners by TCP: 3</li>
                         <li>Condition: not beaten</li>
                      </ul>
                    </p>
                </div>
                <div class="collapse-group">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" class="trigger">
                                  Read more
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                bla-bla-bla...
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('user/img/UAZ-Hunter-Trophy-2015-1920x1080-001.jpg')}}" alt=""/>
                </div>
                <div class="col-md-6">
                    <h3>
                        UAZ Hunter
                    </h3>
                    <h4>
                        Price: 340 000 ₽
                    </h4>
                    <p>
                       <ul>
                         <li>Gearbox: mechanical Mileage: 100000 km</li>
                         <li>Engine power: 114 hp</li>
                         <li>Number of doors: 5</li>
                         <li>Owners by TCP: 2</li>
                         <li>Condition: not beaten</li>
                      </ul>
                    </p>
                </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" class="trigger">
                                   Read more
                                </a>
                            </h4>
                        </div>
                            <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    bla-bla-bla...
                                </div>
                            </div>
                    </div>
            </div>
            </div>
        </div>



    <hr>


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('user/js/clean-blog.min.js')}}"></script>

  </body>

</html>
