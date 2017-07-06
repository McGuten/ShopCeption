(function() {
  'use strict';
  angular
    .module('app.loginController', ['ngCookies'])
    .controller('loginController', loginController);

  loginController.$inject = ['$scope', '$rootScope', '$location', 'AuthenticationService'];

  function loginController($scope, $rootScope, $location, AuthenticationService) {
    // reset login status
    AuthenticationService.ClearCredentials();

    $scope.login = login;

    function login() {
      $scope.dataLoading = true;
      AuthenticationService.Login($scope.username, $scope.password, function(response) {
        if (response.success) {
          AuthenticationService.SetCredentials($scope.username, $scope.password);
          $location.path('/');
        } else {
          $scope.error = response.message;
          $scope.dataLoading = false;
        }
      });
    }
  }
}());
