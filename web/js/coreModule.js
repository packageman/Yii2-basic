define(function(){

  var coreModule = angular.module('coreModule', []);
  coreModule.controller('aboutCtrl', ['$scope', function($scope){
    $scope.greet = "Hello Requirejs";
  }]);

  //return coreModule;
});
