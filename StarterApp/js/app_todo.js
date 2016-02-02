var app = angular.module('app', []);

// in this example we will create a greeting filter
app.filter('greet', function() {
 return function(name) {
    return 'Hello, ' + name + '!';
  };
});

app.controller('AppCtrl', function AppCtrl($scope){
  
  // $scope.userName = 'Igor';

  // var items = ['one','two','three','four'];



});