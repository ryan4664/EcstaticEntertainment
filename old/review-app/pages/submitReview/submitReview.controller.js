'use strict';

angular.module('ReviewApp')
    .controller('SubmitReviewController', SubmitReviewController);

function SubmitReviewController($scope, ReviewService) {
    $scope.review = {};
    $scope.messageSent = false;

    $scope.submitReview = function(review) {
        if (!$scope.review.name) {
            alert("Please enter a name.");
        } else if (!$scope.review.email) {
            alert("Please enter an email.");
        } else if (!$scope.review.description) {
            alert("Please enter a description.");
        } else {
            ReviewService.submit(review).then(function(data) {
                alert("Your review has been submitted for approval.")
                $scope.messageSent = true;
            })
        }
    }
}
