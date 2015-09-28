;(function() { 'use strict';
  // Init Angular Application
  var app = angular.module('searcherUbicate', ['mainController']);
}());
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

  	// get careers by area
    $scope.getCareersByArea = function (area) {
      $http.get('/careers/by-area/' + area).then(function (response) {
        console.log(response.data);
      	$scope.careers = response.data;
      });
    };
  });

}());
//# sourceMappingURL=appscripts.js.map