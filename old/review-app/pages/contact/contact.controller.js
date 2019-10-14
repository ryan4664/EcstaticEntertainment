'use strict';

angular.module('ReviewApp')
    .controller('ContactController', ContactController);

function ContactController($scope, EmailService) {
    $scope.contact = {};
    $scope.messageSent = false;

    $scope.sendMail = function() {
        if (!$scope.contact.name) {
            alert("Please enter a name.");
        } else if (!$scope.contact.email) {
            alert("Please enter an email.");
        } else if (!$scope.contact.message) {
            alert("Please enter a message.");
        } else {
            EmailService.sendContactMail($scope.contact).then(function(data) {
                alert("Your message has been sent!");
                $scope.messageSent = true;
            })
        }
    }

}
