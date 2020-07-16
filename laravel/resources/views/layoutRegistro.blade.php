
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>@yield('title')-NeoRestaurant</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="StyleSheet.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->

<meta name="theme-color" content="#563d7c">


    <style>
        body{
  background: -webkit-linear-gradient(left, #a05422, #424242);

        }
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/sticky-footer-navbar.css')}}" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a href="{{ route('users.index') }}">

        <img  style="width:70%;" src="{{asset('img/logo.png')}}" alt=""/>
        </a>    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('users.index') }}">Usuarios <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('users.nuevo') }}">Crear Usuarios <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0 ">
<div class="container">

<!--==================== Begin page content============================= -->


  <div class="col-13">
      @yield('content')
 
</div>

<!--==================== END page content============================= -->


</div>

</main>

    <!-- footer -->
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
 



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

