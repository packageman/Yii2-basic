define(['angular', 'angularLazyLoad', 'coreModule', 'coreLoader'], function(angular, lazyLoad){
  var app = angular.module('myApp', ['coreModule']);
  lazyLoad.configureApp(app);
  return app;
});
