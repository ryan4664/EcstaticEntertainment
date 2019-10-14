'use strict';

angular.module('ReviewApp')
    .factory('EmailService', EmailService);

function EmailService($http) {
    return {
        sendWeddingMail: function(mail) {
            return $http.post("../api/email/wedding", mail).then(function(response) {
                console.log(response);
                return response.data;
            });
        },
        sendStaffMail: function(mail) {
            return $http.post("../api/email/staff", mail).then(function(response) {
                console.log(response);
                return response.data;
            });
        },
        sendContactMail: function(mail) {
            return $http.post("../api/email/contact", mail).then(function(response) {
                return response.data;
            });
        }
    }
}
