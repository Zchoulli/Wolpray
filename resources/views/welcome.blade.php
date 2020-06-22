<!--
/**
   * @name:        home welcome page
   * @author:      Zaid - Patrik - Henry
   * @description: show the home page ... clubs .. gmaps ... contact form ... - home view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->
@extends('layouts.app')
@section('content')
<br><br><br><br><br>
<!--Show carousel-->
<section class="container">
    <div id="carouselWolprayHome" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselWolprayHome" data-slide-to="0" class="active"></li>
            <li data-target="#carouselWolprayHome" data-slide-to="1"></li>
            <li data-target="#carouselWolprayHome" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/sliders/slider1.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/sliders/slider2.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/sliders/slider3.jpg" alt="Third slide" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselWolprayHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselWolprayHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!--Show cards clubs-->
<section id="clubs" class="container" >
    <br><br><br>
    <h1 class="text-center">Clubs</h1>
    <br>
    <div class="row">
        @foreach ($clubs as $club)
        <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
            <div class="card h-100">
                <a href="home/show/{{$club->id}}"><img class="card-img-top" src="{{$club->cover_url}}" alt="Card image cap" width="100" height="200"/></a>
                <div>
                    <br>
                    <h3 class="card-title text-center">{{$club->clubname}}</h3>
                    <p class="card-text">{{$club->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!--Show about-->
<section id="about" class="download_app_area p_60 container">
    <div class="app_inner">
        <br>
        <h2>Descargar Wolpray App Ahora!</h2>
        <p>Somos una empresa que gestionamos la venta de entradas a clubes y productos de ellos mismo.</p>
        <div class="app_btn_area">
            <div class="app_btn">
                <div class="media">
                    <div class="d-flex">
                        <i class="fa fa-apple" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                        <a href="https://apps.apple.com/es/app/moodle/id633359593" target="_blank">
                            <h4>Available</h4>
                        </a>
                        <p>on App Store</p>
                    </div>
                </div>
            </div>
            <div class="app_btn">
                <div class="media">
                    <div class="d-flex">
                        <i class="fa fa-android" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                        <a href="https://play.google.com/store/apps/details?id=com.moodle.moodlemobile&hl=es" target="_blank">
                            <h4>Available</h4>
                        </a>
                        <p>on Play Store</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <?php
        // $iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
        // $iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
        // $iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
        // $Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
        // $webOS = stripos($_SERVER['HTTP_USER_AGENT'],"webOS" );
        // //do something with this information
        // if( $iPod || $iPhone ){
        //     //browser reported as an iPhone/iPod touch -- do something here
        //     $string = "Location: itms-apps://itunes.apple.com/app/moodle/id633359593#?platform=iphone"; header($string);
        //     die();
        // }
        // else if($iPad){
        //     //browser reported as an iPad -- do something here
        //     $string = "Location: itms-apps://itunes.apple.com/app/moodle/id633359593#?platform=ipad"; header($string);
        //     die();
        // }
        // else if($Android){
        //     //browser reported as an Android device -- do something here
        //     $string = "Location: market://details?id=com.moodle.moodlemobile"; header($string);
        //     die();
        // }
        // else if($webOS){
        //     //browser reported as a webOS device -- do something here
        //     $string = "Location: https://apps.apple.com/es/app/moodle/id633359593"; header($string);
        //     die();
        // }
        // else{
        //     //browser reported as PC -- do something here
        //     $string = "Location:https://play.google.com/store/apps/details?id=com.moodle.moodlemobile"; header($string);
        //     die();
        // }
    ?>

</section>
<br>
<!--Show contact-->
<section id="contact" class="container" style="background-color: lavender">

    <div class="container-fluid">
        <br>
        <h1 class="text-center">Contacto</h1>
        <br>
        @if($message = Session::get('message'))
        <div class="alert alert-success">
        <p>{{$message}}</p>
        </div>
        @endif
        <form action="{{action('HomeController@contact')}}" method="GET">
            @csrf
            <div class="form-group">
                <label for="nombre">Tu nombre (*)</label>
                <input type="text" class="form-control" name="nombre" id="nombre" required />
            </div>
            <div class="form-group">
                <label for="email">Tu correo electrónico (*)</label>
                <input type="email" class="form-control" name="email" id="email" required />
            </div>
            <div class="form-group">
                <label for="telefono">Tu teléfono (*)</label>
                <input type="text" class="form-control" name="telefono" id="telefono" required />
            </div>
            <div class="form-group">
                <label for="asunto">Asunto (*)</label>
                <input type="text" class="form-control" name="asunto" id="asunto" required />
            </div>
            <div class="form-group">
                <label for="mensaje">Tu mensaje (*)</label>
                <textarea class="form-control" name="mensaje" id="mensaje" rows="3" required></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="aceptaPolitica" id="aceptaPolitica" required />
                <label class="form-check-label" for="aceptaPolitica">Acepto la Política de Privacidad (*)</label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>

<!--Show google maps-->
<section class="container">
        <div class="row">
            @include('gmaps')
        </div>
</section>
<br>
<!--Show footer-->
    @include('home.footer')

</body>

