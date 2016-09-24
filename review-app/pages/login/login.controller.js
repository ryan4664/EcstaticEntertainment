'use strict';

angular.module('ReviewApp')
    .controller('LoginController', LoginController);

function LoginController($scope, UserService, $state) {
    $scope.user = {};

    UserService.loginUser().then(function(data) {
        console.log(data);
        console.log("Getting here");
    })

    $scope.loginUser = function(user) {
        UserService.loginUser(user).then(
            function(data) {
                console.log(data);
            },
            function(response) {
                alert('Failed: ' + response);
            }
        );
    }
}
