'use strict';

angular.module('ReviewApp')
    .controller('ApproveController', ApproveController);

function ApproveController($scope, $state, ReviewService) {

    $scope.unapprovedReviewList = {};

    ReviewService.getUnapprovedReviews().then(function(data) {
        console.log(data);
        $scope.unapprovedReviewList = data;
    })

    $scope.approve = function(review) {
        ReviewService.setApproved(review).then(function(data) {
            ReviewService.getUnapprovedReviews().then(function(data) {
                console.log(data);
                $scope.unapprovedReviewList = data;
            })
        })
    }

    $scope.delete = function(review) {
        ReviewService.setDeleted(review).then(function(data) {
            ReviewService.getUnapprovedReviews().then(function(data) {
                $scope.unapprovedReviewList = data;
            })
        })
    }

}
