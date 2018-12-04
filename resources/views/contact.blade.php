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
              <a class="nav-link" href="about">About</a>
            </li>
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
    <header class="masthead" style="background-image: url('{{asset('user/img/contact-bg.jpg') }}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div id="text"></div>

    {!! Form::open(['url' => 'send-mail']) !!}
      <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
      <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <p>{{ Form::text('name', '', ['class'=>'textbox', 'placeholder'=>'Your name...']) }}</p>
                <p class="help-block text-danger"></p>
              </div>
            </div>
      <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <p>{{ Form::email('email', '', ['class'=>'textbox', 'placeholder'=>'Your email...' ,'pattern' =>'[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$']) }}</p>
                <p class="help-block text-danger"></p>
              </div>
            </div>
      <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <p>{{ Form::textarea('msg', '', ['class'=>'textbox', 'placeholder'=>'Your message...']) }}</p>
                <p class="help-block text-danger"></p>
              </div>
            </div>
      <br>
      <div id="success"></div>
      <div class="form-group">
              {{ Form::submit('Send', ['class'=>'button']) }}
            </div>
      
    {!! Form::close() !!}
    <!-- <img src='https://media.giphy.com/media/PkXuh8TFTlBRK/giphy.gif'> -->
    <script src="js/scripts.js"></script>
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

    <!-- Contact Form JavaScript -->
    <script src="{{asset('user/js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('user/js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('user/js/clean-blog.min.js')}}"></script>

  </body>

</html>