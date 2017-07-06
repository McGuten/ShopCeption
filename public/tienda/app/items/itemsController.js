(function() {
  'use strict';
  angular.module('app.itemsController', []).controller('itemsController', itemsController);

  itemsController.$inject = [
    '$scope',
    '$rootScope',
    '$location',
    'serviceCookies',
    'servicesData',
    '$q',
    '$anchorScroll',
    '$window'
  ];

  function itemsController($scope, $rootScope, $location, serviceCookies, servicesData, $q, $anchorScroll, $window) {
    $scope.defaultqty = "1";
    $scope.order = "-price";
    $scope.showAll = true;
    $scope.addToCart = addToCart;
    $scope.checkItem = checkItem;
    $scope.readCart = readCart;
    $scope.resetCart = resetCart;
    $scope.changeOrder = changeOrder;
    $scope.updateQty = updateQty;
    $scope.fixnumber = 1;
    $scope.changeTag = changeTag;
    $scope.filterSelect = filterSelect;
    $scope.checkChange = checkChange;
    $scope.toggle = false;
    $scope.toggleSearch = toggleSearch;


    init();

    function init() {
      if (serviceCookies.checkCookie()) {
        $scope.cart = serviceCookies.getCookiesObject();
      } else {
        $scope.cart = [];
        serviceCookies.putCookiesObject($scope.cart);
        $scope.cart = serviceCookies.getCookiesObject();
      }
      getData().then(readok, error);

    }
    function readok() {
      console.log("Items cargados");
      console.log($scope.items);
      checkItems();
      if($scope.message){
        readTags();
      }
    }

    function error() {
      console.log("Se ha producido un error en la peticion");
    }

    function getData() {
      $scope.items = [];
      var def = $q.defer();
      servicesData.getItems().then(function(response) {
        $scope.items = jsonToArray(response.data);
        def.resolve(response.data);
      }, function(error) {
        def.reject("Error");
      });
      return def.promise;

    }
    function jsonToArray(data) {
      var x = 0;
      for (var e in data) {
        var result = Object.keys(data).map(function(e) {
          return data[e];
        });
      }
      console.log(result);
      return result;
    }

    function addToCart(item, qty) {
      $scope.add = true;
      var newprice;
      var itemtoAdd;
      qty = (qty == undefined)
        ? 1
        : qty;
      Materialize.toast("Has añadido " + qty + " " + item.name + " al carrito", 4000);
      if (checkItem(item, qty)) {
        checkItem(item, qty);
      } else {
        if (qty > 1) {
          newprice = qty * item.price;
          itemtoAdd = {
            qty: qty,
            product: item.name,
            price: newprice
          };
        } else {
          itemtoAdd = {
            qty: qty,
            product: item.name,
            price: item.price
          };
        }
        serviceCookies.setCookiesItem(itemtoAdd);
      }
    }
    function readCart() {
      console.log(serviceCookies.getCookiesObject());
    }

    function checkItem(item, qty) {
      var arrayCart = serviceCookies.getCookiesObject();
      var beforeqty;
      var changeitem;
      for (var i = 0; i < arrayCart.length; i++) {
        if (arrayCart[i].product == item.name) {
          arrayCart[i] = {
            qty: qty,
            product: item.name,
            price: item.price * qty
          };
          changeitem = true;
        }
      }
      if (changeitem) {
        serviceCookies.putCookiesObject(arrayCart);
        return true;
      } else {
        return false;

      }
    }

    function readTags() {
      $scope.tags = [];
      for (var i = 0; i < $scope.items.length; i++) {
        var tag = $scope.items[i].tag;
        $scope.tags.push({name: tag, on: false});
      }
      $scope.noduplicates = [];
      $scope.noduplicates = removeDuplicate($scope.tags);
    }

    function removeDuplicate(arr) {
      var newArr = [];
      angular.forEach(arr, function(value, key) {
        var exists = false;
        angular.forEach(newArr, function(val2, key) {
          if (angular.equals(value.name, val2.name)) {
            exists = true
          };
        });
        if (exists == false && value.name != "") {
          newArr.push(value);
        }
      });
      return newArr;
    }

    function checkChange() {
      for (var t in $scope.noduplicates) {
        if ($scope.noduplicates[t].on) {
          $scope.showAll = false;
          return;
        }
      }
      $scope.showAll = true;
    }

    function filterSelect(a) {
      if ($scope.showAll)
        return true;
      var sel = false;
      for (var tag in $scope.noduplicates) {
        var t = $scope.noduplicates[tag];
        if (t.on) {
          if (a.tag.indexOf(t.name) == -1) {
            return false;
          } else {
            sel = true;
          }
        }
      }
      return sel;
    }

    function changeOrder(order) {
      $scope.order = order;
    }

    function updateQty(qty) {
      $scope.qty = qty;
    }
    function changeTag(tag) {
      console.log(tag);
      $scope.filtertag = tag;
    }

    function resetCart() {
      $scope.cart = [];
      serviceCookies.putCookiesObject($scope.cart);
    }
    function toggleSearch() {
      $scope.toggle = !$scope.toggle;
      if ($scope.toggle)
        $anchorScroll();
      }
    function checkItems() {
        $scope.message = ($scope.items.length > 0)? true : false;
    }

  }
}());
