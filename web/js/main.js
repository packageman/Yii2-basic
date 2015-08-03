require.config({
  paths:{
    angular: "../lib/angular/angular",
    jquery: "../lib/jquery/dist/jquery",
    // app: "../js/app",
    coreModule: "../js/coreModule",
    js: "../js"

  },
  shim:{
    "angular" : {
      deps: ['jquery'],
      exports: 'angular'
    },
    "coreModule": {
      deps: ['angular']
    },
    // "app": ['angular', 'coreModule']
  },
  deps: ['../js/bootstrap']
});
