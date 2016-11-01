'use strict';

angular.module('ReviewApp')
    .controller('SubmitReviewController', SubmitReviewController);

function SubmitReviewController($scope, ReviewService) {

    $scope.submitReview = function(review) {
        ReviewService.submit(review).then(function(data) {
            console.log(data);
        })
    }
}
