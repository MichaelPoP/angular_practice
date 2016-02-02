var myApp = angular.module('myApp', []);

myApp.controller('mainController', function($scope) {

	$scope.name = 'Mike';

	console.log($scope);
    
});