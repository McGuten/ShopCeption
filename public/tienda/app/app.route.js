(function() {
  'use strict';
  angular.module('app.config',[])
    .config(config);

  function config($routeProvider) {
    $routeProvider
      .when("/items", {
        templateUrl: "app/items/items.html",
        controller: "itemsController"
      })
      .when("/cart", {
        templateUrl: "app/cart/cart.html",
        controller: "cartController"
      })
      .otherwise({
        redirectTo: '/items'
      });
  }
}());
