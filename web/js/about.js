'use strict'

define(['app'], function(app){
  return app.registerController('aboutCtrl', ['$rootScope', function(){
    vm = this;
    $rootScope.greet = 'Hello, Angular wiht requirejs.'
  }]);
});
