var reviewApp = angular.module('ReviewApp', ['ui.router', 'ui.bootstrap', 'ui-notification']);

angular.module('ReviewApp').config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/login');
    $stateProvider
        .state('login', {
            url: '/login',
            templateUrl: './pages/login/login.html',
            controller: 'LoginController'
        })
});
