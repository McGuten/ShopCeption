(function() {
  'use strict';
  angular
  .module('app.servicesData',[])
  .factory('servicesData', servicesData);

  servicesData.$inject = ['$http','$location','$q'];

  function servicesData($http,$location,$q) {
    var dataFunction = {
      getItems:getItems,
      getName:getName
    };

    var data ={
      "items": [{
        "name": "item1",
        "price": 2.5,
        "currency": "$",
        "tag":  ['Informatica',"Telefonia"],
        "stock": 10,
        "offer": true,
        "image": "https://www.androidcentral.com/sites/androidcentral.com/files/styles/large/public/topic_images/2015/nexus-5x-topic-1.png?itok=lWskIw0q",
        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      },
      {
        "name": "item2",
        "price": 35,
        "currency": "$",
        "tag": [ 'Informatica','Audio'],
        "stock": 10,
        "offer": true,
        "image": "https://www.androidcentral.com/sites/androidcentral.com/files/styles/large/public/topic_images/2015/nexus-5x-topic-1.png?itok=lWskIw0q",
        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      },
      {
        "name": "item3",
        "price": 1,
        "currency": "$",
        "tag": ["Informatica"],
        "stock": 10,
        "image": "https://www.androidcentral.com/sites/androidcentral.com/files/styles/large/public/topic_images/2015/nexus-5x-topic-1.png?itok=lWskIw0q",
        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      },
      {
        "name": "item4",
        "price": 1.99,
        "currency": "$",
        "tag": ["Hogar",'Limpieza'],
        "stock": 10,
        "image": "https://www.androidcentral.com/sites/androidcentral.com/files/styles/large/public/topic_images/2015/nexus-5x-topic-1.png?itok=lWskIw0q",
        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      },
      {
        "name": "item5",
        "price": 1.99,
        "currency": "$",
        "tag": ["Hogar"],
        "stock": 10,
        "image": "https://www.androidcentral.com/sites/androidcentral.com/files/styles/large/public/topic_images/2015/nexus-5x-topic-1.png?itok=lWskIw0q",
        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      },
      {
        "name": "item6",
        "price": 1.99,
        "currency": "$",
        "tag": ["Informatica",'televisores'],
        "stock": 10,
        "image": "https://www.androidcentral.com/sites/androidcentral.com/files/styles/large/public/topic_images/2015/nexus-5x-topic-1.png?itok=lWskIw0q",
        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      },
      {
        "name": "item7",
        "price": 1.99,
        "currency": "$",
        "tag": ["home"],
        "stock": 10,
        "image": "https://www.androidcentral.com/sites/androidcentral.com/files/styles/large/public/topic_images/2015/nexus-5x-topic-1.png?itok=lWskIw0q",
        "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      }
    ]
  };

  function getItems(){
     var def = $q.defer();
    $http.get("http://shopception.tk/ajax").then(function (data) {
      def.resolve(data);
    },function(){
       def.reject("Failed to get items");
    });
    return def.promise;
  }

  function getName(){
    console.log($location.path());
    var href = $location.path();
    console.log()
    $http.get($location.path()+"/tienda")
    .then(function(response) {
      return response.data;
    });
  }

  return dataFunction;
}

}());
