'use strict';

angular.module('ReviewApp')
    .factory('ReviewService', ReviewService);

function ReviewService($http) {
    return {
        getApprovedReviews: function() {
            return $http.get("../api/review/approved").then(function(response) {
                return response.data;
            });
        },
        getUnapprovedReviews: function() {
            return $http.get("../api/review/unapproved").then(function(response) {
                return response.data;
            });
        },
        getAllReviews: function() {
            return $http.get("../api/review/all").then(function(response) {
                return response.data;
            });
        },
        setApproved: function(review) {
            return $http.post("../api/review/approve", review).then(function(response) {
                return response.data;
            });
        },
        setDeleted: function(review) {
            return $http.post("../api/review/delete", review).then(function(response) {
                return response.data;
            });
        },
        submit: function(review) {
            return $http.post("../api/review/submit", review).then(function(response) {
                return response.data;
            });
        }
    }
}
