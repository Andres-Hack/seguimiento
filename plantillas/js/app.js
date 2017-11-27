var app = angular.module("myApp", []);

app.controller("myController", function($scope, $http) {
    $scope.firstName = "John";
    myData2 = "";
    
  	$scope.myFunc = function() {
      myData2 = $scope.depart;
      $http.get("http://10.0.30.130/upc_seguimiento/plantillas/js/datos.json").then(function (response) {
	      $scope.myData = response.data[myData2];
	  	});
    };
});