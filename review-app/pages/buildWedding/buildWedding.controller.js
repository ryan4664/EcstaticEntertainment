'use strict';

angular.module('ReviewApp')
    .controller('BuildWeddingController', BuildWeddingController);

function BuildWeddingController($scope, EmailService) {
    $scope.wedding = {};
    $scope.messageSent = false;

    $scope.sendWedding = function() {
        if (!$scope.wedding.videoPres) {
            $scope.wedding.videoPres = false;
        }

        if (!$scope.wedding.name) {
            alert("Please enter a name.");
        } else if (!$scope.wedding.email) {
            alert("Please enter an email.");
        } else if (!$scope.wedding.message) {
            alert("Please enter a message.");
        } else {
            EmailService.sendWeddingMail($scope.wedding).then(function(data) {
                alert("Your message has been sent!");
                $scope.messageSent = true;
            })
        }
    }
}
