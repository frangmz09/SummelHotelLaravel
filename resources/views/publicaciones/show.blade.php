@extends('layouts.app')

@section('content')
<div class="banner">    	   
    <img src="{{asset('images/photos/bannerreserva.png')}}"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown index-banner-texto1">PLANIFICACION DE </h1>
                <p class="animated fadeInUp index-banner-texto2">RESERVA</p>                
            </div>
        </div>
    </div>
</div>
<!-- banner-->

<div class="container">

<h1 class="titulo">{{ $publicacion->nombre }}</h1>

    <img src="{{ asset('/storage/'.$publicacion->imagen) }}" class="card-detalle" alt="">

<div class="room-features spacer">
  <div class="row">
  <div class="col-sm-4 col-md-offset-3">
<h3>Reservar</h3>

    <form role="form" class="wowload fadeInRight">
        <div class="form-group">
            <input type="texto" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone">
        </div>        
        
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4"></textarea>
        </div>
        <button class="btn btn-default">Realizar reserva</button>
    </form>    
</div>  
    <div class=" col-md-2">
      <div class="size-price">Superficie<span>{{ $publicacion->superficie }} mts</span></div>
      <div class="size-price">Precio por noche<span>{{ $publicacion->precio_format() }}</span></div>
    </div>
  </div>
</div>
                     


</div>
@endsection
