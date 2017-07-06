(function() {
  'use strict';
  angular.module('app.servicesData', []).factory('servicesData', servicesData);

  servicesData.$inject = ['$http', '$location', '$q'];

  function servicesData($http, $location, $q) {
    var dataFunction = {
      getItems: getItems,
      getDataUser: getDataUser
    };
    function getItems() {
      var name = getName();
      var def = $q.defer();
      $http.get("http://shopception.tk/tienda/"+name+"/items").then(function(data) {
        def.resolve(data);
      }, function() {
        def.reject("Failed to get items");
      });
      return def.promise;
    }

    function getDataUser() {
      var name = getName();
      var def = $q.defer();
      $http.get("http://shopception.tk/tienda/"+name+"/datos").then(function(data) {
        def.resolve(data);
      }, function() {
        def.reject("Failed to get data");
      });
      return def.promise;
    }
    function getName(){
      var href = $location.absUrl();
      var res = href.split("/");
      var name = res[4].substring(0,res[4].length-1);
      return name;
    }

    return dataFunction;
  }

}());
