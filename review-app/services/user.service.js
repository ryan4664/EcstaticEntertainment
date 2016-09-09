'use strict';

angular.module('RealityShow')
    .factory('UserService', UserService);

function UserService($http) {
    return {
        loginUser: function(user) {
            return $http.post("../api/user/login").then(function(response) {
                console.log(response);
                return response.data;
            });
        }
    }
}
