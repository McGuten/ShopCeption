(function() {
  'use strict';
  angular.module('app.config',[])
    .config(config);

  function config($routeProvider) {
    $routeProvider
      .when("/", {
        templateUrl: "app/home/home.html",
        controller: "homeController"
      })
      .when("/edit", {
        templateUrl: "app/edit/edit.html",
        controller: "editController"
      })
      .when("/items", {
        templateUrl: "app/items/items.html",
        controller: "itemsController"
      })
      .when("/items/:ID", {
        templateUrl: "app/item/item.html",
        controller: "itemController"
      })
      .when("/contact", {
        templateUrl: "app/contact/contact.html",
        controller: "contactController"
      })
      .when("/cart", {
        templateUrl: "app/cart/cart.html",
        controller: "cartController"
      })
      .otherwise({
        redirectTo: '/'
      });
  }
}());
