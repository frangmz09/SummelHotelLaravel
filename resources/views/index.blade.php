@extends('layouts.app')

@section('content')



<!-- banner -->
<div class="banner">    	   
    <img src="{{asset('images/photos/recepcionbanner1.png')}}"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown index-banner-texto1">VENI A VIVIR UNA EXPERIENCIA </h1>
                <p class="animated fadeInUp index-banner-texto2">INOLVIDABLE</p>                
            </div>
        </div>
    </div>
</div>
<!-- banner-->


<!-- body -->
<div id="information" class="spacer">
<div class="container">
<div class="row index-div">

<div class="col-md-6 col-sm-6 index-texto">
    <h3>¡Bienvenido a Rio Negro!</h3>
    <p>"Serenidad" y "Natural" son palabras que vienen a la mente cuando descubrimos este tesoro escondido en la Patagonia argentina: la hermosa provincia de Río Negro. Ubicado en un paisaje de majestuosas montañas, valles frondosos y ríos cristalinos, Summel Hotel es el lugar perfecto para escapar del ajetreo de la vida moderna.</p>
</div>
<div class="col-md-6 col-sm-6 ">
    <img src="images/photos/indeximg1.png" alt="montanias" width="100%">
</div>

</div>  

<div class="row index-div ">
<div class="col-md-6 col-sm-6">
    <img src="images/photos/indeximg2.png" alt="montanias" width="100%">
</div>
<div class="col-md-6 col-sm-6 index-texto">
    <h3>Siente la energía Patagonica</h3>
    <p>Nuestra ubicación en el corazón de las montañas de Bariloche es simplemente espectacular. Te permitirá sumergirte en la belleza natural de la región y disfrutar de vistas panorámicas de los picos nevados, los lagos cristalinos y los bosques frondosos. Serás testigo de la energía única que emana de este lugar y te sentirás inspirado por su majestuosidad.</p>
</div>

</div> 

<div class="row index-div">

<div class="col-md-6 col-sm-6 index-texto">
    <h3>Descanso y Relax</h3>
    <p>Nuestro hotel en Bariloche cuenta con una sección dedicada al descanso y relax, donde podrás disfrutar de una experiencia rejuvenecedora y renovadora. Entre las comodidades que ofrecemos, destaca una hermosa piscina para que puedas relajarte y disfrutar de momentos de tranquilidad durante tu estadía.</p>
</div>
<div class="col-md-6 col-sm-6">
    <img src="images/photos/indeximg3.png" alt="montanias" width="100%">
</div>

</div>  
</div>
</div>


@endsection