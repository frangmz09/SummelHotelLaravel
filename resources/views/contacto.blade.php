@extends('layouts.app')

@section('content')
<!-- banner -->
<div class="banner">    	   
    <img src="{{asset('images/photos/contactobanner.png') }}"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown index-banner-texto1">FÁCIL ES</h1>
                <p class="animated fadeInUp index-banner-texto2">ENCONTRARSE</p>                
            </div>
        </div>
    </div>
</div>
<!-- banner-->



<div id="information" class="spacer">
<div class="container">
       <h1 class="contact-title" >¡Envianos tu consulta, te responderemos lo antes posible!</h1>


       <div class="row">
              <div class="col-md-6">
			<div class="spacer">   		
			<form role="form">
			<div class="form-group">	
                     <p>NOMBRE</p>
			<input type="texto" class="form-control" id="name" placeholder="Nombre">
			</div>
			<div class="form-group">
                     <p>EMAIL</p>
			<input type="email" class="form-control" id="email" placeholder="Email">
			</div>
			<div class="form-group">
                     <p>TELEFONO</p>
			<input type="phone" class="form-control" id="phone" placeholder="Telefono">
			</div>
			<div class="form-group">
                     <p>MENSAJE</p>
			<textarea type="email" class="form-control"  placeholder="Mensaje" rows="4"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default btn-dark">ENVIAR</button>
			</form>
			</div>
              </div>
              <div class="col-md-6">
                     <div class="contact-info">
                     <div class="contact-info-mini"><p> <img src="{{asset('/images/photos/correo.png')}}" alt="">    summel@bariloche.com.ar</p></div>
                     <div class="contact-info-mini"><p> <img src="{{asset('/images/photos/tel.png')}}" alt="">    MITRE 500, SAN CARLOS DE BARILOCHE, RIO NEGRO.</p></div>
                     <div class="contact-info-mini"><p> <img src="{{asset('/images/photos/ubi.png')}}" alt="">    (294) 4429850 / 4429 896</p></div>
                     </div>
              </div>
       </div>
</div>
</div>
@endsection
