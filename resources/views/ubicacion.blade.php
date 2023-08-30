@extends('layouts.app')

@section('content')
<!-- banner -->
<div class="banner">    	   
    <img src="{{asset('images/photos/bannerubicacion.png')}}"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown index-banner-texto1">RIO NEGRO</h1>
                <p class="animated fadeInUp index-banner-texto2">UBICACION</p>                
            </div>
        </div>
    </div>
</div>
<!-- banner-->


<div class="container">

<h1 class="titulo">No te pierdas la belleza de este lugar y encontranos en...</h1>



<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
       	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.0173367369243!2d-71.3025042!3d-41.1341475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961a7b71d5b90779%3A0xd5e6f3e6eaf58950!2sMitre%20500%2C%20San%20Carlos%20de%20Bariloche%2C%20R%C3%ADo%20Negro!5e0!3m2!1ses!2sar!4v1687036364987!5m2!1ses!2sar" width="100%" height="300" frameborder="0"></iframe>	
       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		
                     <h4>Nuestro hotel en Bariloche, Rio Negro, te brinda una ubicación privilegiada cerca del centro de la ciudad y rodeado de impresionantes paisajes montañosos y lagos. Descubre la belleza 
                            natural, la gastronomia y las emocionantes actividades al aire libre que te ofrece esta encantadora ciudad desde nuestra comodidad.</h4>
       		
			</div>


       	</div>


             

       </div>
</div>
</div>


</div>
@endsection