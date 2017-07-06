(function() {
  'use strict';
  angular.module('app.indexController', []).controller('indexController', indexController);

  indexController.$inject = [
    '$scope',
    '$rootScope',
    '$location',
    'serviceCookies',
    'servicesData',
    '$q'
  ];

  function indexController($scope, $rootScope, $location, serviceCookies, servicesData, $q) {

    init()

    function init() {
      var datauser;
      servicesData.getDataUser().then(function(respose) {
        datauser = respose.data;
        console.log(datauser);
        $scope.shopname = datauser.tienda;
        $scope.user = datauser.user;

      });

    }

  }
}());
