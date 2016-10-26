'use strict';

angular.module('ReviewApp')
    .controller('BuildWeddingController', BuildWeddingController);

function BuildWeddingController($scope, EmailService) {
    $scope.wedding = {};


    $scope.sendWedding = function() {
        if (!$scope.wedding.videoPres) {
            $scope.wedding.videoPres = false;
        }

        EmailService.sendWeddingMail($scope.wedding).then(function(data) {
            console.log(data);
        })
    }
}
