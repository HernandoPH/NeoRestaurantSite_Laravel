@extends('layoutHome')
//@section('title',"Home");

@section('content')
    
<main role="main">

    <section class="jumbotron text-center">
      <div >
    <div style="justify-content: center" class="row">
      @foreach ($categorias as $categoria)
      <a style="margin:10px" href="#{{$categoria->nombre_categoria}}" class="rainbow-button" alt="{{strtoupper($categoria->nombre_categoria)}}"></a>

        
    @endforeach
    </div>
      </div>
    </section>

 

    <div class="album py-5  ">
      <div class="container">

{{--aqui--}}
@foreach ($categorias as $categoria)
        
    <h1 id="{{$categoria->nombre_categoria}}" class="naranja">{{strtoupper($categoria->nombre_categoria)}} </h1>
    <div class="row">

@foreach($menu as $menuItem)
@if ($categoria->nombre_categoria==$menuItem->categoria_menu)
<div sty class="col-md-4">
  <div class="card mb-4 box-shadow">
    <img style="height: 280px;" class="card-img-top" src="{{asset('img/menu/'.$menuItem->img.'')}}" alt="Card image cap">
    <div class="card-body">
      <h2 class="card-text">{{$menuItem->nombre_menu}}</h2>
      <p class="card-text">{{$menuItem->descripcion_menu}}</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
        </div>
        <small class="text-muted">9 mins</small>
      </div>
    </div>
  </div>
 </div>  
@endif

@endforeach
</div>

@endforeach

{{--aqui--}}
        
        </div>
    </div>

  </main>

@endsection

 

