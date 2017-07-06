(function() {
  'use strict';
  angular
    .module('app.cartController', [])
    .controller('cartController', cartController);

  cartController.$inject = ['$scope', '$location', '$rootScope', 'serviceCookies','servicesData'];

  function cartController ($scope, $location, $rootScope, serviceCookies,servicesData) {
    $scope.listitem = servicesData;

    $scope.shopname = "Electronica24";
    $scope.cart = [];

    init();
    function init() {
      var cart = [];
      if (serviceCookies.checkCookie()) {
        $scope.cart = serviceCookies.getCookiesObject();
        totalPrice();
      } else {
        var arr = [];
        serviceCookies.putCookiesObject(arr);
        $scope.message = false;
      }
    }

    function totalPrice(){
      $scope.totalprice = 0;
      for (var i = 0; i < $scope.cart.length; i++) {
          $scope.totalprice += $scope.cart[i].price;
      }
    }
}


}());
