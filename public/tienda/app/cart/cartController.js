(function() {
  'use strict';
  angular
    .module('app.cartController', [])
    .controller('cartController', cartController);

  cartController.$inject = ['$scope', '$location', '$rootScope', 'serviceCookies','servicesData'];

  function cartController ($scope, $location, $rootScope, serviceCookies,servicesData) {
    $scope.listitem = servicesData;

    $scope.shopname = "Electronica24";
    $scope.resetCart = resetCart;
    $scope.removeItem = removeItem;

    init();
    function init() {
      var cart = [];
      if (serviceCookies.checkCookie()) {
        $scope.cart = serviceCookies.getCookiesObject();
        checkCart();
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
    function resetCart() {
      $scope.cart = [];
      serviceCookies.putCookiesObject($scope.cart);
      checkCart();

    }
    function removeItem(item) {
      console.log(serviceCookies.getCookiesObject());
      for (var i = 0; i < $scope.cart.length; i++) {
        if($scope.cart[i].product === item.product){
          var limit = i +1;
          $scope.cart.splice(i,limit);
        }
      }
      serviceCookies.putCookiesObject($scope.cart);
      checkCart();
    }
    function checkCart(){
      $scope.message = ($scope.cart.length > 0) ? true : false;
    }
}


}());
