'use strict';

angular.module('ReviewApp')
    .controller('ContactController', ContactController);

function ContactController($scope, EmailService) {

    $scope.sendMail = function() {
        EmailService.sendContactMail($scope.contact).then(function(data) {
            console.log(data);
        })
    }

}
