define(['angular', 'angularLazyLoad'], function(angular, lazyLoad){
  var coreModule = angular.module('coreModule', []);
  lazyLoad.configureApp(coreModule);
  return coreModule;
});
