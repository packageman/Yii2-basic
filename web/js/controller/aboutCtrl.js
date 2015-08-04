define(['coreModule'], function(coreModule){
  return coreModule.controller('aboutCtrl', ['$scope', function($scope){
    $scope.greet = "Hello Requirejs";
  }]);
});
