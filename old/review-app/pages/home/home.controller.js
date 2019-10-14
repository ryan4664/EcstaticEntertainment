'use strict';

angular.module('ReviewApp')
    .controller('HomeController', HomeController);

function HomeController($scope, $state) {

    $scope.myInterval = 5000;
    $scope.noWrapSlides = false;
    $scope.active = 0;
    var currIndex = 0;

    $scope.slides = [{
        image: '../../assets/carousel1-crop.jpg',
        title: 'Ecstatic Entertainment SK',
        text: "Let the adventure begin!",
        id: 0
    }, {
        image: '../../assets/carousel2Alt.jpg',
        title: 'What We Offer',
        text: "We do a wide range of events such as weddings, graduations, special events, clubs, etc.",
        id: 1
    }, {
        image: '../../assets/carousel3-crop.jpg',
        title: 'Build your own dream event',
        text: "Instead of offering you certain packages to choose from, we let you customize your event with everything you may need or want. Click build your own event and begin putting together the masterpiece you have in mind!",
        id: 2
    }];

    console.log($scope.slides);

}
