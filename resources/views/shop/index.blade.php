<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <link rel="icon" href="http://icons.iconarchive.com/icons/uiconstock/e-commerce/256/shopping-icon.png">
  <title>Tienda</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../tienda/assests/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../tienda/assests/css/style.css" type="text/css" rel="stylesheet" />

  <style type="text/css" media="screen">
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
  nav {
    background-color: blue !important;
  }
  </style>
</head>

<body ng-app="app">
  <nav class="lighbutton border-top light-blue darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#/" class="brand-logo">{{ $nombre }}</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="http://shopception.tk/">Shopception</a></li>
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
    <div>
      <div ng-view>
      </div>
    </div>
  </main>
  <footer class="page-footer light-blue darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text"> <i class="material-icons">local_grocery_store</i>{{ $nombre }}</h5>
          <p class="grey-text text-lighten-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contacto</h5>
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
        Hecho por <a class="orange-text text-lighten-3">{{ $user }}</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../tienda/assests/js/materialize.js"></script>
  <!-- JS  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.6/angular.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.6/angular-route.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.6/angular-cookies.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-materialize/0.2.2/angular-materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-filter/0.5.16/angular-filter.min.js"></script>
  <script src="../tienda/app/app.js"></script>
  <script src="../tienda/app/app.route.js"></script>
  <script src="../tienda/app/items/itemsController.js"></script>
  <script src="../tienda/app/cart/cartController.js"></script>
  <script src="../tienda/app/services/servicesCookies.js"></script>
  <script src="../tienda/app/services/servicesData.js"></script>

</body>

</html>
