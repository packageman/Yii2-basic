require.config({
  paths:{
    angular: "../lib/angular/angular",
    jquery: "../lib/jquery/dist/jquery",
    angularLazyLoad: "../lib/angular-couch-potato/dist/angular-couch-potato"
  },
  shim:{
    "angular" : {
      deps: ['jquery'],
      exports: 'angular'
    },
    "angularLazyLoad": ['angular']
  },
  deps: ['../js/bootstrap']
});
