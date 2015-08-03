require.config({
    baseUrl: '/lib/',
    //配置angular的路径
    paths:{
        "angular": "angular/angular.js"
    },
    //这个配置是你在引入依赖的时候的包名
    shim:{
        "angular":{
            exports: "angular"
        }
    }
})
