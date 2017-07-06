<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <link rel="icon" href="{{{ asset('img/favicon.png') }}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopception</title>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    {!! MaterializeCSS::include_full() !!}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--Scripts-->
   <script src="/js/init.js"></script>
  <style type="text/css" media="screen">
      body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }

  .parallax-noob {
    background: rgba(255,255,255,0.5);
  }
  </style>
</head>
<body>
<nav class="teal" role="navigation"> 
  <ul id="slide-out" class="side-nav">
    <li><a href="http://shopception.tk/" class="btn waves-effect waves-light">
    <i class="material-icons #009688-text white-text strong header">label</i>Shopception</a>
    <li><div class="divider"></div></li>
      @if (Auth::guest())
          <li><a href="{{ route('login') }}" class="waves-effect"><i class="material-icons #009688-text teal-text">person_pin</i>Login</a></li>
          <li><a href="{{ route('register') }}" class="waves-effect"><i class="material-icons #009688-text teal-text">perm_identity</i>Register</a></li>
      @else
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              <i class="material-icons #009688-text teal-text">person_pin</i>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
          </li>
          <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  <i class="material-icons #f44336-text red-text">person_pin</i>Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
          <li><div class="divider"></div></li>
          @if (Auth::user()->shop_id)
            <li><a href="tienda/{{ Auth::user()->shop->name }}" class="waves-effect">
            <i class="material-icons strong header">shop</i>{{ Auth::user()->shop->name }}</a>
            <li><a href="form" class="waves-effect">
            <i class="material-icons strong header">playlist_add</i>Añadir items</a>
          @else
            <li><a href="/creartiendanueva" class="waves-effect">
            <i class="material-icons strong header">shop</i>Crea tu tienda</a>
          @endif
            <li><a href="settings" class="waves-effect">
            <i class="material-icons strong header">settings</i>Opciones</a>
      @endif
    </li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
  <a href="http://shopception.tk/">Shopception</i></a>

@if (!(Auth::guest()))
  <div class="fixed-action-btn">
    <a href="settings" class="btn-floating btn-large teal">
      <i class="large material-icons">settings</i>
    </a>
  </div>
@endif
</nav>
<main>
@yield('container')
</main>
<footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Shopception</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consequat lacinia urna, non sodales quam ultrices suscipit. Vivamus lobortis sapien a mauris pretium, sit amet molestie leo finibus. Aliquam in vehicula urna. Nullam dictum vulputate ligula, nec euismod tellus porta non.</p>


      </div>
    <div class="col l3 s12">
      <h5 class="white-text">Redes sociales</h5>
      <ul>
        <li><a class="white-text" href="#!">Twitter</a></li>
        <li><a class="white-text" href="#!">Facebook</a></li>
        <li><a class="white-text" href="#!">Intagram</a></li>
        <li><a class="white-text" href="#!">InfoJobs</a></li>
    </ul>
</div>
</div>
</div>
<div class="footer-copyright">
  <div class="container">
      Hecho por: Jesus David Martin y Javier Lopez
  </div>
</div>
</footer>

</body>

</html>
