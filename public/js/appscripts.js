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
      if(area === null){
        $scope.careers = '';
        return;
      }

      $http.get('/careers/by-area/' + area).then(function (response) {
      	$scope.careers = response.data;
      });
    };

    $scope.getCountries = function (career) {
      $scope.countries = [];

      if(career === null)
        return;

      var universities = career.universities;
      var items;
      var countries = [
        'México',
        'EUA',
        'España',
        'Canadá',
        'Inglaterra'
      ];

      for(var i = 0; i < countries.length; i++) {
        items = 0;

        for(var j = 0; j < universities.length; j++) {
          if(universities[j].country == countries[i])
            items++;
        }

        if(items > 0)
          $scope.countries.push(countries[i]);
      }

    };
  });

}());
//# sourceMappingURL=appscripts.js.map