'use strict';

angular.module('ReviewApp')
    .controller('BuildStaffController', BuildStaffController);

function BuildStaffController($scope, EmailService) {
    $scope.staff = {};
    $scope.messageSent = false;

    $scope.sendStaff = function() {
        if (!$scope.staff.videoPres) {
            $scope.staff.videoPres = false;
        }

        if (!$scope.staff.name) {
            alert("Please enter a name.");
        } else if (!$scope.staff.email) {
            alert("Please enter an email.");
        } else if (!$scope.staff.message) {
            alert("Please enter a message.");
        } else {
            EmailService.sendStaffMail($scope.staff).then(function(data) {
                alert("Your message has been sent!")
                $scope.messageSent = true;
            })
        }
    }
}
