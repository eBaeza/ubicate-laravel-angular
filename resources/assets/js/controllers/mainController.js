;(function() { 'use strict';
  var app = angular.module('mainController', []);

  // main controller
  app.controller('mainController', function mainController($scope, $http) {
  	// areas
  	$scope.areas = [
      'Aeronáutica',
      'Educación',
      'Computación',
      'Medicina'
    ];

  	// get data json
  	$http.get('http://ubicate.laravelng/careers').then(function (response) {
      console.log(response.data);
  		$scope.careers = response.data;
  	});
  });

}());