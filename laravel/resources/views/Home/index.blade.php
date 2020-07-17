@extends('layoutHome')
//@section('title',"Home");

@section('content')
    
  <main role="main" class="inner cover" style="color:white;text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5)">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="{{asset('img/slider3.jpg')}}" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1 class="tituloCarrusel">Aprovecha la Oferta</h1>
              <p class="textoCarrusel">Camarones glaseados con piña 15€
                </p>
              <p><a class="btn btn-lg btn-danger" href="#" role="button">Pide de nuestro menú</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="{{asset('img/slider1.jpg')}}" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="tituloCarrusel">Ingredientes frescos para un excelente manjar</h1>
              <p class="textoCarrusel">Contamos con los mejores ingredientes de la ciudad preparado por nuestros chefs</p>
              {{--<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>--}}
            </div>
          </div>
        </div>
        <div class="carousel-item">

          <img class="third-slide" src="{{asset('img/footer_background.jpg')}}" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1 class="tituloCarrusel">Disfruta de nuestra comida en nuestra elegante sala.</h1>
              <p class="textoCarrusel">Contamos con una sala con todas las comodidades que puede imaginar ademas de nuestro excelente servicio que lo atendera en todo lo que necesite</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <div style="background: gray;
          border-radius: 50px;
          width: 55%;
          margin-left: 23%;">
          <img class="rounded-circle" src="{{asset('img/qr_image.png')}}" alt="Generic placeholder image" width="140" height="140">
        </div>
          <h2>Codigo QR</h2>
          <p>Somos revolucionarios y ahora puedes pedir directamente desde tu mesa escaneado el codigoQR que se encuentra en  su mesa </p>
          <p><a class="btonNaranja btn btn-secondary" href="#" role="button">Leer más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div style="background: gray;
          border-radius: 50px;
          width: 55%;
          margin-left: 23%;">
          <img  src="{{asset('img/cellicon.png')}}" alt="Generic placeholder image" width="140" height="140">
          </div>
          <h2>App</h2>
          <p>Contamos con una excelente y dinamica organización gracias a nuestro sistema y nuestra App móvil</p>
          <p><a class="btonNaranja btn btn-secondary" href="#" role="button">Leer más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div style="background: gray;
          border-radius: 50px;
          width: 55%;
          margin-left: 23%;">
          <img class="" src="{{asset('img/pcicon.png')}}" alt="Generic placeholder image" width="140" height="140">
          </div>
          <h2>Sistema</h2>
          <p>Gracias a nuestro sistema informático podemos servirle de una manera más eficaz disfruta sin preocuparte</p>
          <p><a  class="btonNaranja btn btn-secondary" href="#" role="button">Leer más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="naranja"> Neo </span>Restaurant <span class="text-muted">La casa de la buena comida</span></h2>
          <p class="lead">Contamos con años de experiencia en la cocina, nuestra especialidad la comida del mar también contamos con excelentes cortes de carne y un excelente servicio y presentación</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{asset('img/menu/Aperitivo-marisco-900x600.jpg')}}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">No olvides que puedes usar nuestro sistema <span class="naranja">QR</span></h2>
          
          <p class="lead">En  <span class="naranja" style="font-weight: bold">Neo </span>Restaurant somos modernos puedes pedir si lo deseas mediante nuestro menú con QR y asi evitar contacto perfecto para estos días  
            <img style="width:10%" src="{{asset('img/covidIcon.png')}}" alt="Generic placeholder image">
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img style="border-radius:20%" class="featurette-image img-fluid mx-auto" src="{{asset('img/qrCell.png')}}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> Administra todo con nuestro poderoso<span class="naranja">Dashboard</span></h2>
          <p class="lead">Utiliza el poderoso Dashboard de <span class="naranja" style="font-weight: bold">Neo </span>Restaurant si es que eres parte del equipo de administración </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="{{asset('img/dashboard.png')}}" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
  
  </main>
      

@endsection

 

