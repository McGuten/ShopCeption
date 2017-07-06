    <!-- Compiled and minified CSS -->
    {!! MaterializeCSS::include_full() !!}
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
  </style>
  <nav class="lighbutton: ;border-top: ;t-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#/" class="brand-logo">{{ $tienda }}</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#/"></a></li>
        <li><a href="#/items">Productos</a></li>
        <li><a href="#/cart"><i class="material-icons">shopping_cart</i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#/items">Productos</a></li>
        <li><a href="#/cart"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
      <a href="#" class="button-collapse" data-activates="nav-mobile" data-sidenav="left" data-menuwidth="150" data-closeonclick="false">
        <i class="material-icons">menu</i>
      </a>

    </div>
  </nav>
<main>
@yield('container')
</main>
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4"></p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>
</div>
