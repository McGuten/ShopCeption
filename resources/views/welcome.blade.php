@extends('layouts/main')

@section('container')

<div id="index-banner" class="parallax-container parallax-noob">
  <div class="section no-pad-bot">
    <div class="container opacity">
      <br><br>
      <h1 class="header center teal-text text-lighten-8 strong">Shopception</h1>
      <div class="row center">
        <h2 class="header col s12 strong">Crea tu tienda online en pocos minutos</h5>
        </div>
        <div class="row center">
        @if (Auth::guest())
          <a href="/register" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Registrate</a>
        @endif
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="https://cdn.techinasia.com/wp-content/uploads/2015/07/online-shopping-ecommerce-ss-1920.png" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">stay_current_portrait</i></h2>
            <h5 class="center">Compatibilidad</h5>

            <p class="light">Tu tienda sera totalmente funcional tambien en la version movil</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">web</i></h2>
            <h5 class="center">Plantillas</h5>

            <p class="light">Podras cambiar el formato de tu tienda seleccionando los temas que damos a tu disposicion</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Simple</h5>

            <p class="light">Te ayudamos a crear tu tienda facilmente, y una forma de contactar con tus clientes</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light"><strong>Diferentes tipos de temas</strong></h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://www.patrickqueisler.de/wp-content/uploads/2014/12/Unbenannt-1.jpg" alt="Unsplashed background img 2"></div>
  </div>

  

  @endsection