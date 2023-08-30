@extends('layouts.app')

@section('content')
<!-- banner -->
<div class="banner">    	   
    <img src="{{asset('images/photos/bannerhab.png')}}"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown index-banner-texto1">CALIDAS Y MODERNAS ASI SON NUESTRAS</h1>
                <p class="animated fadeInUp index-banner-texto2">HABITACIONES</p>                
            </div>
        </div>
    </div>
</div>
<!-- banner-->

<div class="container">

<h2 class="titulo">Habitaciones y Tarifas</h2>


<!-- form -->

<div class="row">
  
  @foreach ($publicaciones as $publicacion)
    
    <div class="col-sm-6 wowload fadeInUp">
      <div class="rooms ">
        <img src="{{ asset('/storage/'.$publicacion->imagen) }}" class="card-publicacion">
          <div class="info"><h3>{{ $publicacion->nombre }}</h3>
            <p>{{ $publicacion->descripcion }} </p>
            <a href="{{ route('publicaciones.show', $publicacion) }}" class="btn btn-default reserva-btn">Reservá</a>
          </div>
      </div>
    </div>

  @endforeach
</div>

<div class="col-md-6 col-md-offset-3">{{ $publicaciones->links()}}</div>


</div>
@endsection
