(function() {
  'use strict';
  angular
    .module('app.serviceCookies',[])
    .factory('serviceCookies', serviceCookies);

  serviceCookies.$inject = ['$cookies'];

  function serviceCookies($cookies) {

    var cookiesFunctions = {
      setCookies:setCookies,
      getCookies:getCookies,
      getCookiesObject:getCookiesObject,
      setCookiesItem:setCookiesItem,
      checkCookie:checkCookie,
      putCookiesObject:putCookiesObject,
      removeCookie:removeCookie
    };

      function setCookies() {
        $cookies.put("anonymous", []);
      }
      function setCookiesItem(item) {
        var cart = $cookies.getObject('anonymous') || [];
        cart.push(item);
        $cookies.putObject("anonymous", cart);
      }

      function getCookies() {
        return $cookies.get('anonymous');
      }
      function getCookiesObject() {
        return $cookies.getObject('anonymous');
      }
      function putCookiesObject(cart) {
        return $cookies.putObject('anonymous',cart);
      }
      function checkCookie(){
        var result = ($cookies.get('anonymous') !== undefined) ? true : false;
        return result;
      }
      function removeCookie() {
        $cookies.remove('anonymous');
      }
      return cookiesFunctions;
  }

}());
