@extends('layouts.app')

@section('content')
<div class="banner">    	   
    <img src="{{asset('images/photos/bannerinstalaciones.png')}}"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1 class="animated fadeInDown index-banner-texto1">NOVEDOSAS Y RECONFORTANTES</h1>
                <p class="animated fadeInUp index-banner-texto2">INSTALACIONES</p>                
            </div>
        </div>
    </div>
</div>
<!-- banner-->

<div class="container">

       <h1 class="titulo">INSTALACIONES</h1>
       <div class="row gallery">
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/1.png" title="Foods" class="gallery-image" data-gallery><img src="images/photos/1.png" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/2.png" title="Coffee" class="gallery-image" data-gallery><img src="images/photos/2.png" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/3.png" title="Travel" class="gallery-image" data-gallery><img src="images/photos/3.png" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/4.png" title="Adventure" class="gallery-image" data-gallery><img src="images/photos/4.png" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/5.png" title="Fruits" class="gallery-image" data-gallery><img src="images/photos/5.png" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/6.png" title="Summer" class="gallery-image" data-gallery><img src="images/photos/6.png" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/7.png" title="Bathroom" class="gallery-image" data-gallery><img src="images/photos/7.png" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/88.png" title="Rooms" class="gallery-image" data-gallery><img src="images/photos/88.png" class="img-responsive"></a></div>
              <div class="col-sm-4 wowload fadeInUp"><a href="images/photos/9.png" title="Big Room" class="gallery-image" data-gallery><img src="images/photos/9.png" class="img-responsive"></a></div>
              
       </div>
</div>
@endsection