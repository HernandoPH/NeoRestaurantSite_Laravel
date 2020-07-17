
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>@yield('title')-NeoRestaurant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./index.css" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    {{--<link href="{{asset('css/sticky-footer-navbar.css')}}" rel="stylesheet">--}}


  </head>

  <body class="text-center ">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <a href="{{ route('users.index') }}">

            <h3 class="masthead-brand">  <img  style="width:70%;" src="{{asset('img/logo.png')}}" alt=""/>
            </h3>          </a>
          
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
            <a class="nav-link" href="#">Menu</a>
            <a class="nav-link" href="#">Contacto</a>
          </nav>
        </div>
      </header>
      @yield('content')
  <div class="footer">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-xs-12">
                  <div class="first">
                      <h4>My Skills</h4>
                      <p> Analytical Skills</p>
                      <p> Problem-solving skills</p>
                      <p> Critical-thinking skills</p>
                      <p> Detail-oriented</p>
                      <p> Multitasking</p>
                      <p> Self-motivated</p>
                  </div>
              </div>

              <div class="col-md-4 col-xs-12">
                  <div class="second">
                      <h4> Navigate</h4>
                      <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Projects</a></li>
                          <li><a href="#">About</a></li>
                          <li><a href="#">Contact</a></li>
                      </ul>
                  </div>
              </div>

              <div class="col-md-4 col-xs-12">
                  <div class="third">
                      <h4> Contact</h4>
                      <ul>
                          <li>Andreea Mihaela Bunget </li>
                          <li></li>


                        <li><i class="far fa-envelope"></i> andreea@andreeabunget.co.uk</li>
                          <li><i class="far fa-envelope"></i> email@yahoo.com</li>


                        <li><i class="fas fa-map-marker-alt"></i> London, UK </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="line"></div>
                  <div class="second2">
                      <a href="https://codepen.io/AndreeaBunget" target="_blank"> <i class="fab fa-codepen fa-2x margin"></i></a>
                      <a href="https://github.com/WebDeveloperCodeRep" target="_blank"> <i class="fab fa-github fa-2x margin"></i></a>
                      <a href="https://www.linkedin.com/in/andreea-mihaela-bunget-a4248812b/" target="_blank"> <i class="fab fa-linkedin fa-2x margin"></i></a>
                      <a href="https://www.youtube.com/channel/UCX674BUbomzBCakbb75lhfA?view_as=subscriber" target="_blank"><i class="fab fa-youtube fa-2x margin" ></i></a>

                  </div>

              </div>
          </div>
          </div>
  </div>
</div>
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
<!---->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
