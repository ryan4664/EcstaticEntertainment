var reviewApp = angular.module('ReviewApp', ['ui.router', 'ui.bootstrap', 'ui-notification']);

angular.module('ReviewApp').config(function($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise('/home');
    $stateProvider
        .state('home', {
            url: '/home',
            templateUrl: './pages/home/home.html',
            controller: 'HomeController'
        })
        .state('offer', {
            url: '/offer',
            templateUrl: './pages/offer/offer.html',
            controller: 'OfferController'
        })
        .state('buildWedding', {
            url: '/build-wedding-event',
            templateUrl: './pages/buildWedding/buildWedding.html',
            controller: 'BuildWeddingController'
        })
        .state('buildGrad', {
            url: '/build-grad-event',
            templateUrl: './pages/buildGrad/buildGrad.html',
            controller: 'BuildGradController'
        })
        .state('buildStaff', {
            url: '/build-staff-event',
            templateUrl: './pages/buildStaff/buildStaff.html',
            controller: 'BuildStaffController'
        })
        .state('requestEvent', {
            url: '/request-event',
            templateUrl: './pages/request/request.html',
            controller: 'RequestController'
        })
        .state('testimonies', {
            url: '/testimonies',
            templateUrl: './pages/testimonies/testimonies.html',
            controller: 'TestimoniesController'
        })
        .state('contact', {
            url: '/contact',
            templateUrl: './pages/contact/contact.html',
            controller: 'ContactController'
        })
        .state('login', {
            url: '/login',
            templateUrl: './pages/login/login.html',
            controller: 'LoginController'
        })
        .state('approve', {
            url: '/approve',
            templateUrl: './pages/approve/approve.html',
            controller: 'ApproveController'
        })
});
