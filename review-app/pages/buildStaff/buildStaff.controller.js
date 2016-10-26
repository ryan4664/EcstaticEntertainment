'use strict';

angular.module('ReviewApp')
    .controller('BuildStaffController', BuildStaffController);

function BuildStaffController($scope, $state) {
    $scope.staff = {};


    $scope.sendStaff = function() {
        if (!$scope.wedding.videoPres) {
            $scope.wedding.videoPres = false;
        }

        EmailService.sendStaffMail($scope.wedding).then(function(data) {
            console.log(data);
        })
    }
}
